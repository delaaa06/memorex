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
        'likes' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relationship with User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Komentar
    public function komentar(): HasMany
    {
        return $this->hasMany(Komentar::class, 'post_id');
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


    // //ini yg kutambah
    // // Scope untuk postingan populer
    // public function scopePopular($query, $limit = 4)
    // {
    //     return $query->whereIn('visibilitas', ['public', 'anon'])
    //                 ->orderBy('likes', 'desc')
    //                 ->orderBy('created_at', 'desc')
    //                 ->limit($limit);
    // }

    // // Helper untuk format likes (15000 jadi 15K)
    // public function getFormattedLikesAttribute()
    // {
    //     if ($this->likes >= 1000) {
    //         return round($this->likes / 1000, 1) . 'K';
    //     }
    //     return $this->likes;
    // }

    // // Helper untuk excerpt/preview isi postingan
    // public function getExcerptAttribute($length = 100)
    // {
    //     return \Illuminate\Support\Str::limit(strip_tags($this->isi), $length);
    // }

    // // Helper untuk format tanggal yang lebih readable
    // public function getFormattedDateAttribute()
    // {
    //     return $this->created_at->locale('id')->diffForHumans();
    // }


}