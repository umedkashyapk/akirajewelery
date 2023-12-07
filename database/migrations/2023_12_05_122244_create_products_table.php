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
            $table->id('category_id');
            $table->string('category');
            $table->string('description');
            $table->string('titel');
            $table->string('price');
            $table->string('discounts');
            $table->string('availability');
            $table->string('rating');
            $table->string('tax');
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('Update_at')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
