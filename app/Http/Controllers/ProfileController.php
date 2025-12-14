<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        // Load count untuk posts dan komentars
        $user->loadCount(['posts', 'komentars']);
        
        // Load posts untuk ditampilkan di tab
        $posts = $user->posts()->latest()->get();

        $activities = $user ->activities()
                            ->with('post')
                            ->latest()
                            ->take(10)
                            ->get();
        
        return view('profile', compact('user', 'posts', 'activities'));
    }
    
    public function update(Request $request)
    {
        $user = auth()->user();
        
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255|unique:users,username,' . $user->id,
            'bio' => 'nullable|string|max:500',
        ]);
        
        // Update user data
        $user->update($validated);
        
        return response()->json([
            'success' => true,
            'message' => 'Profil berhasil diupdate'
        ]);
    }
    
    // ===== ADD XP =====
    public function addXp(Request $request)
    {
        $user = auth()->user();
        $xpToAdd = $request->xp;
        
        $oldLevel = $user->level;
        $user->xp += $xpToAdd;
        
        // Hitung level baru (setiap 1000 XP = 1 level)
        $newLevel = floor($user->xp / 1000) + 1;
        $user->level = $newLevel;
        
        $user->save();
        
        return response()->json([
            'success' => true,
            'user' => [
                'xp' => $user->xp,
                'level' => $user->level
            ],
            'levelUp' => $newLevel > $oldLevel
        ]);
    }
    
    // ===== DAILY LOGIN =====
    // public function dailyLogin(Request $request)
    // {
    //     $user = auth()->user();
        
    //     // Cek apakah sudah login hari ini
    //     if ($user->last_login && $user->last_login->isToday()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'XP login harian sudah diklaim hari ini'
    //         ]);
    //     }
        
    //     // Update login streak
    //     if ($user->last_login && $user->last_login->isYesterday()) {
    //         // Streak lanjut
    //         $user->login_streak++;
    //     } else if (!$user->last_login || !$user->last_login->isYesterday()) {
    //         // Reset streak
    //         $user->login_streak = 1;
    //     }
        
    //     $user->last_login = now();
    //     $user->save();
        
    //     return response()->json([
    //         'success' => true,
    //         'loginStreak' => $user->login_streak
    //     ]);
    // }

    // Tambahkan method ini di ProfileController.php

    public function dailyLogin(Request $request)
    {
        $user = Auth::user();
        
        // Check if already claimed today
        $lastLogin = $user->last_login;
        $today = now()->toDateString();
        
        if ($lastLogin && $lastLogin === $today) {
            return response()->json([
                'success' => false,
                'message' => 'XP login harian sudah diklaim hari ini'
            ], 400);
        }
        
        // Update streak
        $yesterday = now()->subDay()->toDateString();
        if ($lastLogin && $lastLogin === $yesterday) {
            // Streak continues
            $user->increment('login_streak');
        } else {
            // Streak reset
            $user->login_streak = 1;
        }
        
        // Update last login date
        $user->last_login = $today;
        
        // Add XP (50 XP untuk daily login)
        $user->xp += 50;
        
        // Check level up
        $maxXp = $user->level * 1000;
        $levelUp = false;
        
        while ($user->xp >= $maxXp) {
            $user->level++;
            $maxXp = $user->level * 1000;
            $levelUp = true;
        }
        
        $user->save();
        
        // Log activity
        Activity::create([
            'user_id' => $user->id,
            'type' => 'login',
            'description' => 'Anda mengklaim XP login harian',
            'metadata' => json_encode(['streak' => $user->login_streak, 'xp' => 50])
        ]);
        
        return response()->json([
            'success' => true,
            'loginStreak' => $user->login_streak,
            'user' => [
                'xp' => $user->xp,
                'level' => $user->level
            ],
            'levelUp' => $levelUp
        ]);
    }

    public function checkDailyLogin()
    {
        $user = Auth::user();
        $today = now()->toDateString();
        $lastLogin = $user->last_login;
        
        $canClaim = !($lastLogin && $lastLogin === $today);
        
        return response()->json([
            'canClaim' => $canClaim,
            'lastClaim' => $lastLogin
        ]);
    }

    
    // ===== UPDATE AVATAR =====
    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        $user = auth()->user();
        
        // Hapus avatar lama jika ada
        if ($user->avatar) {
            $oldPath = str_replace('/storage/', '', $user->avatar);
            if (Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->delete($oldPath);
            }
        }
        
        // Simpan avatar baru
        $path = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = '/storage/' . $path;
        $user->save();
        
        return response()->json([
            'success' => true,
            'avatar' => $user->avatar
        ]);
    }
    
    // ===== UPDATE BANNER =====
    public function updateBanner(Request $request)
    {
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        $user = auth()->user();
        
        // Hapus banner lama jika ada
        if ($user->banner) {
            $oldPath = str_replace('/storage/', '', $user->banner);
            if (Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->delete($oldPath);
            }
        }
        
        // Simpan banner baru
        $path = $request->file('banner')->store('banners', 'public');
        $user->banner = '/storage/' . $path;
        $user->save();

         Activity::create([
            'user_id' => $user->id,
            'type' => 'banner',
            'description' => 'Anda mengubah banner profil',
        ]);
        
        return response()->json([
            'success' => true,
            'banner' => $user->banner
        ]);
    }
    
    // ===== GET REPORTS & PENALTIES =====
    public function getReports()
    {
        $user = auth()->user();
        
        // TODO: Implementasi sistem report sesuai kebutuhan
        // Untuk sekarang return data kosong
        
        return response()->json([
            'success' => true,
            'reportCount' => 0,
            'suspended' => false,
            'suspendedUntil' => null,
            'penalties' => [],
            'totalXpPenalty' => 0
        ]);
    }
}