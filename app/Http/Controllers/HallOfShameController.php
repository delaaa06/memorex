<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\komentar;
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Str;

class HallOfShameController extends Controller
{
    public function index()
    {
        // Ambil postingan populer berdasarkan likes, bulan ini
        $popularPosts = Post::where('visibilitas', 'public')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->with('user')
            ->orderBy('likes', 'desc')
            ->take(12) // Ambil 12 postingan teratas
            ->get();
        
        return view('hall-of-shame', compact('popularPosts'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q'); 
        
        $searchResults = Post::where('visibilitas', 'public')
            ->where(function($q) use ($query) {
                // Search di judul dan isi
                $q->where('judul', 'like', "%$query%")
                ->orWhere('isi', 'like', "%$query%")
                // Search di kategori
                ->orWhere('kategori', 'like', "%$query%")
                // Search di username (relasi user)
                ->orWhereHas('user', function($userQuery) use ($query) {
                    $userQuery->where('name', 'like', "%$query%")
                            ->orWhere('username', 'like', "%$query%");
                });
            })
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        $popularPosts = Post::where('visibilitas', 'public')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->with('user')
            ->orderBy('likes', 'desc')
            ->take(12)
            ->get();
        
        return view('search', compact('query', 'searchResults', 'popularPosts'));
    }
    
    public function showPost($id)
    {
        $post = Post::with('user')->findOrFail($id);
        
        // Increment view count (opsional, perlu tambah kolom 'views')
        // $post->increment('views');
        
        return response()->json([
            'id' => $post->id,
            'judul' => $post->judul,
            'kategori' => $post->kategori,
            'isi' => $post->isi,
            'gambar' => $post->gambar,
            'likes' => $post->likes,
            'formatted_date' => $post->created_at->format('d F Y'),
            'user' => $post->user->name ?? 'Anonymous'
        ]);
    }

   public function toggleLike(Post $post)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Anda harus login'], 401);
        }

        $like = Like::where('post_id', $post->id)
                    ->where('user_id', $user->id)
                    ->first();

        if ($like) {
            // Unlike
            $like->delete();
            
            // Hapus activity log
            Activity::where('user_id', $user->id)
                    ->where('post_id', $post->id)
                    ->where('type', 'like')
                    ->delete();
            
            $liked = false;
        } else {
            // Like
            Like::create([
                'post_id' => $post->id,
                'user_id' => $user->id
            ]);
            
            $user->increment('xp', 5);
            
            // Catat aktivitas LIKE
            Activity::create([
                'user_id' => $user->id,
                'post_id' => $post->id,
                'type' => 'like',
                'description' => 'menyukai postingan "' . Str::limit($post->judul, 30) . '"',
                'icon' => 'fa-heart',
                'color' => 'danger'
            ]);
            
            $liked = true;
        }
        
        // ⭐ Hitung ulang dari database untuk akurasi 100%
        $actualLikes = Like::where('post_id', $post->id)->count();
        $post->update(['likes' => $actualLikes]);
        $post->refresh();

        return response()->json([
            'success' => true,
            'liked' => $liked,
            'likes_count' => (int) $post->likes,
            'message' => $liked ? 'Post liked!' : 'Post unliked!'
        ]);
    }

   public function storekomentar(Request $request,Post $post)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Anda harus login'], 401);
        }

        $request->validate([
            'content' => 'required|string|max:1000'
        ]);

        // Sesuaikan dengan kolom di tabel komentar
        $komentar = komentar::create([
            'post_id' => $post->id,
            'user_id' => $user->id,
            'isi_komen' => $request->content,
            'tgl_komen' => now(),
            'likes_komen' => 0,
            'reply_komen' => null,
            'report_komen' => null
        ]);

        $user->increment('xp', 10);

        $newLevel = floor($user->xp / 1000) + 1;
        $oldLevel = $user->level;
        
        if ($newLevel > $oldLevel) {
            $user->level = $newLevel;
            $user->save();
        }

        Activity::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'type' => 'komentar',
            'description' => 'berkomentar di "' . Str::limit($post->judul, 30) . '"',
            'icon' => 'fa-komentar',
            'color' => 'primary'
        ]);

        $komentar->load('user');

        return response()->json([
            'success' => true,
            'komentar' => [
                'id' => $komentar->id,
                'content' => $komentar->isi_komen, // GANTI
                'user_name' => $komentar->user->name,
                'created_at' => $komentar->tgl_komen ? \Carbon\Carbon::parse($komentar->tgl_komen)->diffForHumans() : 'baru saja'
            ]
        ]);
    }

    public function getkomentars(Post $post)
    {
        $komentars = $post->komentars()->with('user')->latest('tgl_komen')->get();

        return response()->json([
            'komentars' => $komentars->map(function($komentar) {
                return [
                    'id' => $komentar->id,
                    'content' => $komentar->isi_komen,
                    'user_name' => $komentar->user->name ?? 'Anonymous',
                    'created_at' => $komentar->tgl_komen ? \Carbon\Carbon::parse($komentar->tgl_komen)->diffForHumans() : 'baru saja'
                ];
            })
        ]);
    }
}