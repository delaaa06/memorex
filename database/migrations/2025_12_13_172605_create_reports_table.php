<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->foreignId('reporter_user_id')->constrained('users')->onDelete('cascade'); // yang nge-report
            $table->foreignId('reported_user_id')->constrained('users')->onDelete('cascade'); // yang di-report (author post)
            $table->enum('reason', [
                'spam',
                'harassment', 
                'hate',
                'violence',
                'inappropriate',
                'fake',
                'other'
            ]);
            $table->text('details')->nullable(); // keterangan tambahan dari user
            $table->enum('status', ['pending', 'reviewed', 'rejected', 'approved'])->default('pending');
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->onDelete('set null'); // admin yang review
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};