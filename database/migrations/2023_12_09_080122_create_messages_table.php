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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('subject', 100)->nullable();
            $table->string('message', 255)->nullable();
            $table->enum('status', ['unread', 'read', 'replayed', 'no-replayed'])->default('unread');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
