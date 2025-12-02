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
        Schema::create('orderLine', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orderId')->constrained('order')->onDelete('cascade');
            $table->foreignId('dishId')->constrained('dish')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('unitPrice', 8, 2);
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('updatedAt')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderLine');
    }
};
