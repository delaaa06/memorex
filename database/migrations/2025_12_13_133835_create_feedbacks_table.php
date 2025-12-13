<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('rating'); // 1-5 stars
            $table->string('title', 100);
            $table->text('feedback_text');
            $table->json('categories'); // untuk menyimpan array kategori
            $table->string('email')->nullable();
            $table->string('name', 100)->nullable();
            $table->boolean('allow_contact')->default(false);
            $table->integer('xp_earned')->default(50); // XP yang didapat dari feedback ini
            $table->timestamps();
        });

        // Index untuk query yang sering dipakai
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('rating');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};