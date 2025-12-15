<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'judul',
        'kategori',
        'isi',
        'visibilitas',
        'gambar',
        'likes',
    ];

    protected $casts = [
        // 'likes' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relationship with User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function komentar(): HasMany
    {
        return $this->hasMany(komentar::class, 'post_id');
    }

    // Helper method to get media URL
    public function getGambarUrlAttribute()
    {
        return $this->gambar ? asset('storage/' . $this->gambar) : null;
    }

    // Helper method to check if media is video
    public function isVideo()
    {
        if (!$this->gambar) return false;
        
        $extension = strtolower(pathinfo($this->gambar, PATHINFO_EXTENSION));
        return in_array($extension, ['mp4', 'mov', 'avi', 'webm', 'mkv']);
    }

    // Helper method to check if media is image
    public function isImage()
    {
        if (!$this->gambar) return false;
        
        $extension = strtolower(pathinfo($this->gambar, PATHINFO_EXTENSION));
        return in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg']);
    }

    // Helper method to check if post is visible to user
    public function isVisibleTo($userId)
    {
        if ($this->visibilitas === 'public' || $this->visibilitas === 'anon') {
            return true;
        }
        
        if ($this->visibilitas === 'private') {
            return $this->user_id === $userId;
        }
        
        return false;
    }

    // Helper method to get author name based on visibility
    public function getAuthorNameAttribute()
    {
        if ($this->visibilitas === 'anon') {
            return 'Anonymous';
        }
        
        return $this->user->name ?? 'Unknown';
    }

    // Scope untuk filter visibility
    public function scopePublic($query)
    {
        return $query->where('visibilitas', 'public');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('kategori', $category);
    }

    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d F Y');
    }

     public function komentars()
    {
        return $this->hasMany(komentar::class, 'post_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id');
    }

    // Method helper
    public function isLikedBy($user)
    {
        if (!$user) return false;
        return $this->likes()->where('user_id', $user->id)->exists();
    }

    public function likesCount()
    {
        return $this->likes()->count();
    }
    
    public function komentarsCount()
    {
        return $this->komentars()->count();
    }

}