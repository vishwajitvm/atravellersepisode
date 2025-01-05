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
        Schema::create('tour_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_category_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); // New user_id field
            $table->string('name')->nullable(false);
            $table->json('banner_images'); // Store multiple image paths
            $table->string('location')->nullable();
            $table->string('duration')->comment('Duration in days and nights');
            $table->text('description');
            $table->json('includes'); // Store as JSON array
            $table->json('excludes'); // Store as JSON array
            $table->json('tour_plans'); // Store as JSON array of heading-description pairs
            $table->decimal('price', 10, 2);
            $table->unsignedInteger('intake')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by')->nullable();
            
            // Foreign key relationships
            $table->foreign('tour_category_id')->references('id')->on('tour_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // Relate to users table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_details');
    }
};
