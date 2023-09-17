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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('name');
            $table->boolean('status')->default('1');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->double('price',10,2)->default('0.00');
            $table->string('quantity')->default('0');
            $table->integer('discount')->nullable();
            $table->string('discount_type')->nullable()->comment('amount or percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * $table->text('description')->nullable();
           
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
