<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('komentar', function (Blueprint $table) {
            $table->timestamp('tgl_komen')->useCurrent()->change();
            $table->integer('likes_komen')->default(0)->change();
            $table->text('reply_komen')->nullable()->change();
            $table->integer('report_komen')->default(0)->change();
        });
    }

    public function down(): void
    {
        // rollback jika perlu
    }
};