<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'reason' => 'required|in:spam,harassment,hate,violence,inappropriate,fake,other',
            'details' => 'nullable|string|max:1000'
        ]);

        // Ambil post untuk dapat author
        $post = Post::findOrFail($request->post_id);

        // Cek apakah user sudah pernah report post ini
        $existingReport = Report::where('post_id', $request->post_id)
                                ->where('reporter_user_id', Auth::id())
                                ->first();

        if ($existingReport) {
            return response()->json([
                'success' => false,
                'message' => 'Kamu sudah melaporkan postingan ini sebelumnya.'
            ], 400);
        }

        // Simpan report
        $report = Report::create([
            'post_id' => $request->post_id,
            'reporter_user_id' => Auth::id(),
            'reported_user_id' => $post->user_id,
            'reason' => $request->reason,
            'details' => $request->details,
            'status' => 'pending'
        ]);

        Activity::create([
                'user_id' => $user->id,
                'post_id' => $post->id,
                'type' => 'reporting',
                'description' => 'Melaporkan postingan "' . Str::limit($post->judul, 30) . '"',
                'color' => 'danger'
            ]);
            
        Activity::create([
                'user_id' => $post->user_id,
                'post_id' => $post->id,
                'type' => 'reported',
                'description' => 'Postingan anda "' . Str::limit($post->judul, 30) . '" telah dilaporkan',
                'color' => 'danger'
            ]);

        // (Opsional) Auto-action kalau report >= threshold tertentu
        $reportCount = Report::where('post_id', $request->post_id)->count();
        
        if ($reportCount >= 5) {
            // Auto hide post atau suspend user
            $post->update(['visibilitas' => 'hidden']);
        }

        return response()->json([
            'success' => true,
            'message' => 'Laporan berhasil dikirim! Terima kasih atas perhatianmu.'
        ]);
    }
}