<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';
    protected $fillable = [
        'user_id',
        'rating',
        'title',
        'feedback_text',
        'categories',
        'email',
        'name',
        'allow_contact',
        'xp_earned'
    ];

    protected $casts = [
        'categories' => 'array', 
        'allow_contact' => 'boolean',
        'created_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}