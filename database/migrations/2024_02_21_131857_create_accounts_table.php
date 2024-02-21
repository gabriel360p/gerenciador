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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('confirmed_email')->nullable();
            $table->text('description')->nullable();
            
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('users')->on('users');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
