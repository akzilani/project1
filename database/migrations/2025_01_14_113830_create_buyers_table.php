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
        Schema::create('buyers', function (Blueprint $table) {
            
            $table->id(); // Primary key
            $table->unsignedBigInteger('product_id'); // Foreign key column
            $table->string('name'); // Buyer name
            $table->string('email')->unique(); // Buyer email
            $table->timestamps(); // Created and updated timestamps

            // Add the foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
