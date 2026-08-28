<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');   // e.g. "Branded Residences", "International Franchise"
            $table->string('location');   // e.g. "Kigali, Rwanda"
            $table->text('description')->nullable();
            $table->string('color_from', 7)->default('#4C5FAE'); // gradient start (hex)
            $table->string('color_to', 7)->default('#202A54');   // gradient end (hex)
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};