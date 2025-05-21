<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('user_id');
            $table->text('feedback_text');
            $table->tinyInteger('rating'); // asumsi rating dari 1–5
            $table->timestamps();

            // Foreign Keys
            $table->foreign('school_id')->references('school_id')->on('schools')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('feedback');
    }
};
