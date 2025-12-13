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

    public function toggleLike($id)
    {
        $post = Post::findOrFail($id);
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
            
            // Hapus activity log untuk unlike
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

        return response()->json([
            'liked' => $liked,
            'likes_count' => $post->likesCount()
        ]);
    }

   public function storekomentar(Request $request, $id)
    {
        $post = Post::findOrFail($id);
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
            'isi_komen' => $request->content, // GANTI dari 'content' ke 'isi_komen'
            'likes_komen' => 0,
            'reply_komen' => null,
            'report_komen' => null
        ]);

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

    public function getkomentars($id)
    {
        $post = Post::findOrFail($id);
        $komentars = $post->komentars()->with('user')->get();

        return response()->json([
            'komentars' => $komentars->map(function($komentar) {
                return [
                    'id' => $komentar->id,
                    'content' => $komentar->content,
                    'user_name' => $komentar->user->name,
                    'created_at' => $komentar->created_at->diffForHumans()
                ];
            })
        ]);
    }
}