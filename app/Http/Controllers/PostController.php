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

    public function index()
    {
        // Ambil semua post yang visible, urutkan dari yang terbaru
        $posts = Post::whereIn('visibilitas', ['public','anon'])
                    ->with('user') // Eager load user relationship
                    ->latest()
                    ->get();
        
        // Split posts menjadi 2 bagian untuk swipe-left dan swipe-right
        $midpoint = ceil($posts->count() / 2);
        $leftPosts = $posts->take($midpoint);
        $rightPosts = $posts->skip($midpoint);
        
        return view('beranda', compact('leftPosts', 'rightPosts'));
    }
    
    
}