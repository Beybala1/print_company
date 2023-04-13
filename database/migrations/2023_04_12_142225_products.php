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
            $table->foreignId('category_id')
                    ->nullable()
                    ->constrained()
                    ->onDelete('cascade');
            $table->string('title');
            $table->longText('description_1');
            $table->longText('description_2')->nullable();
            $table->longText('description_3')->nullable();
            $table->longText('description_4')->nullable();
            $table->longText('description_5')->nullable();
            $table->string('image');
            $table->string('slug');
            $table->timestamps();
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
