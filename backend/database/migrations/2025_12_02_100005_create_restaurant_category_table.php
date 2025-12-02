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
        Schema::create('restaurantCategory', function (Blueprint $table) {
            $table->foreignId('restaurantId')->constrained('restaurant')->onDelete('cascade');
            $table->foreignId('categoryId')->constrained('category')->onDelete('cascade');
            $table->primary(['restaurantId', 'categoryId']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantCategory');
    }
};
