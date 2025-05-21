<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->unsignedBigInteger('school_id');
            $table->string('name', 255);
            $table->string('grade', 10);
            $table->integer('age');
            $table->enum('meal_status', ['received', 'not_received']);
            $table->timestamps();

            // Foreign Key
            $table->foreign('school_id')->references('school_id')->on('schools')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('students');
    }
};
