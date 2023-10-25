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
        Schema::create('reviews', function (Blueprint $table) 
        {
            $table->id();
            //maybe this should be foreignId and constrained to the relationship
            $table->foreignId('book_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->text('text');
            $table->timestamps();
            $table->unique(['book_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

