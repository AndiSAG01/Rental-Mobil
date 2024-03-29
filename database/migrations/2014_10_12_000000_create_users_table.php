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
            $table->id();
            $table->string('kd_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('alamat');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('ktp_number');
            $table->string('ktp_photo');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('isAdmin');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};