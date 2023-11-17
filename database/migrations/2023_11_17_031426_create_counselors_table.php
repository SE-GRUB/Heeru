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
        Schema::create('counselors', function (Blueprint $table) {
            $table->id();
            // foreign key dari tabel users
            $table->foreignId('id_users')->constrained('users')->onDelete('cascade');
            $table->integer('chat_price')->unsigned()->nullable();
            $table->integer('video_price')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->text('ratig')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counselors');
    }
};
