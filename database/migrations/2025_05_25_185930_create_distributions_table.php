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
        Schema::create('meal_distributions', function (Blueprint $table) {
            $table->bigIncrements('distribution_id');
            $table->unsignedBigInteger('school_id');
            $table->date('meal_date');
            $table->integer('total_students');
            $table->string('meal_type', 50);
            $table->timestamps();

            $table->foreign('school_id')->references('school_id')->on('schools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributions');
    }
};
