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
        Schema::create('feature_sections', function (Blueprint $table) {
            $table->id();
            $table->string('main_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('heading')->nullable();
            $table->string('subheading')->nullable();
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('title')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_sections');
    }
};
