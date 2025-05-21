<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('schools', function (Blueprint $table) {
            $table->id('school_id');
            $table->string('school_name', 255);
            $table->text('address');
            $table->string('contact_number', 15);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('schools');
    }
};
