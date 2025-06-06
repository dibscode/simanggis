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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Sesuai ERD
            $table->string('name'); // Laravel default
            $table->string('username', 100)->unique(); // Dari ERD
            $table->string('email')->unique(); // Laravel default
            $table->timestamp('email_verified_at')->nullable(); // Laravel default
            $table->string('password', 255); // Disamakan dengan ERD
            $table->unsignedBigInteger('school_id');
            $table->enum('role', ['admin', 'guru'])->default('admin'); // Dari ERD
            $table->rememberToken(); // Laravel default (varchar(100))
            $table->timestamps(); // created_at & updated_at

            $table->foreign('school_id')->references('school_id')->on('schools')->onDelete('cascade');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
