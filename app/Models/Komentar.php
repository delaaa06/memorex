<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class komentar extends Model
{
    protected $table = 'komentar';

    public $timestamps = false; 

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

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}