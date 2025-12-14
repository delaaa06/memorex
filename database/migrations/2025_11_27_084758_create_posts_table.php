<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->tinytext('judul');
            $table->string('kategori');
            $table->longtext('isi');
            $table->string('visibilitas');
            $table->string('gambar');
            $table->integer('likes')->default(0);
        });

        Schema::create('komentar', function(Blueprint $table){
            $table->id();
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamp('tgl_komen')->useCurrent();
            $table->text('isi_komen');
            $table->integer('likes_komen')->default(0);
            $table->text('reply_komen')->nullable();
            $table->integer('report_komen')->default(0);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('komentar');
    }
};