<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Activity;

class PostController extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'story' => 'required|string',
            'category' => 'required|string',
            'datetime' => 'nullable|date',
            'visibility' => 'required|string',
            'gambar' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,mov,avi|max:81920', // max 80MB
        ]);

        // Handle file upload
        $gambarPath = null;
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            
            // Generate unique filename
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Store file in storage/app/public/posts
            $gambarPath = $file->storeAs('posts', $filename, 'public');
        }

        // Create post
        Post::create([
            'user_id' => Auth::id(),
            'judul' => $request->title,
            'isi' => $request->story,
            'kategori' => $request->category,
            'visibilitas' => $request->visibility,
            'gambar' => $gambarPath,
            'likes' => 0,
        ]);

        // Redirect kembali ke halaman upload (blank page seperti requirement)
        return redirect()->route('upload');

        Activity::log(
            $user->id,
            'post',
            'Anda membuat postingan baru: "' . $post->judul . '"',
            ['post_id' => $post->id]
        );
        
        return response()->json([
            'success' => true,
            'post' => $post
        ]);
    }

    public function like(Request $request, $id)
    {
        $user = Auth::user();
        $post = Post::findOrFail($id);
        
        $like = Like::where('user_id', $user->id)
                    ->where('post_id', $post->id)
                    ->first();
        
        if ($like) {
            $like->delete();
            $post->decrement('likes');
            $liked = false;
        } else {
            Like::create([
                'user_id' => $user->id,
                'post_id' => $post->id
            ]);
            $post->increment('likes');
            $liked = true;
            
            // ⭐ LOG ACTIVITY
            Activity::log(
                $user->id,
                'like',
                'Anda menyukai postingan "' . Str::limit($post->judul, 30) . '"',
                ['post_id' => $post->id]
            );
        }
        
        return response()->json([
            'success' => true,
            'liked' => $liked,
            'likes_count' => $post->likes
        ]);
    }

    public function komentar(Request $request)
    {
        // TODO: Implement komentar functionality
    }

    public function repost(Request $request)
    {
        // TODO: Implement repost functionality
    }

    public function index()
    {
        // Ambil semua post yang visible, urutkan dari yang terbaru
        $posts = Post::where('visibilitas', 'public')
                    ->with('user') // Eager load user relationship
                    ->latest()
                    ->get();
        
        // Split posts menjadi 2 bagian untuk swipe-left dan swipe-right
        $midpoint = ceil($posts->count() / 2);
        $leftPosts = $posts->take($midpoint);
        $rightPosts = $posts->skip($midpoint);
        
        return view('beranda', compact('leftPosts', 'rightPosts'));
    }
    
    public function show($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return response()->json([
            'id' => $post->id,
            'judul' => $post->judul,
            'kategori' => $post->kategori,
            'isi' => $post->isi,
            'gambar' => $post->gambar,
            'formatted_date' => $post->formatted_date,
            'user' => $post->user->name ?? 'Anonymous'
        ]);
    }
    
}