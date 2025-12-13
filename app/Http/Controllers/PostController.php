<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    }

    public function like(Request $request)
    {
        // TODO: Implement like functionality
        $postId = $request->input('post_id');
        $post = Post::findOrFail($postId);
        $post->increment('likes');
        
        return response()->json([
            'success' => true,
            'likes' => $post->likes
        ]);
    }

    public function comment(Request $request)
    {
        // TODO: Implement comment functionality
    }

    public function repost(Request $request)
    {
        // TODO: Implement repost functionality
    }
}