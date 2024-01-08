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
        Schema::create('truyenthongs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Blog\Topic::class, 'topic_id');
            $table->string('group')->nullable();
            $table->string('ordering')->nullable(0);
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('route')->nullable();
            $table->string('image')->nullable();
            $table->string('color-primary')->nullable();
            $table->string('color-secondary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truyenthongs');
    }
};
