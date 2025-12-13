<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    protected $table = 'komentar';

    public $timestamps = false; // Karena pakai tgl_komen manual

    protected $fillable = [
        'post_id',
        'user_id',
        'tgl_komen',
        'isi_komen',
        'likes_komen',
        'reply_komen',
        'report_komen',
    ];

    protected $casts = [
        'tgl_komen' => 'datetime',
        'likes_komen' => 'integer',
        'report_komen' => 'integer',
    ];

    // Relationship with Post
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    // Relationship with User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}