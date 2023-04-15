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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_image')->nullable();
            $table->string('heading')->nullable();
            $table->string('description')->nullable();
            $table->string('icon_name');
            $table->string('icon');
            $table->string('image')->nullable();
            $table->string('button_text')->nullable();
            $table->boolean('show_button')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
