<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda harus login terlebih dahulu'
            ], 401);
        }
        
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'title' => 'required|string|max:100',
            'feedback_text' => 'required|string|min:50|max:1000',
            'categories' => 'required|array|min:1',
            'categories.*' => 'string|in:user-experience,features,design,performance,content,suggestions',
            'email' => 'nullable|email|max:255',
            'name' => 'nullable|string|max:100',
            'allow_contact' => 'boolean'
        ]);

        DB::beginTransaction();
        try {
            $feedback = Feedback::create([
                'user_id' => Auth::id(),
                'rating' => $validated['rating'],
                'title' => $validated['title'],
                'feedback_text' => $validated['feedback_text'],
                'categories' => $validated['categories'],
                'email' => $validated['email'] ?? null,
                'name' => $validated['name'] ?? null,
                'allow_contact' => $validated['allow_contact'] ?? false,
                'xp_earned' => 50
            ]);

            $user = Auth::user();
            $user->increment('xp', 50);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Feedback berhasil dikirim!',
                'xp_earned' => 50,
                'total_xp' => $user->xp,
                'feedback' => $feedback
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim feedback: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getRecent()
    {
        $feedbacks = Feedback::with('user:id,name,username,avatar')
            ->select('id', 'user_id', 'rating', 'title', 'feedback_text', 'created_at')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return response()->json($feedbacks);
    }

    public function getStats()
    {
        $stats = [
            'total_feedbacks' => Feedback::count(),
            'average_rating' => round(Feedback::avg('rating'), 1),
            'total_xp_earned' => Feedback::where('user_id', Auth::id())->sum('xp_earned'),
        ];

        $userRank = User::where('xp', '>', Auth::user()->xp)->count() + 1;
        $stats['user_rank'] = $userRank;

        return response()->json($stats);
    }

    public function getUserFeedbacks()
    {
        $feedbacks = Feedback::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($feedbacks);
    }
}