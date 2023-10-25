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
        Schema::table('authors', function (Blueprint $table) {
            $table->unique('slug');
        });
        // Schema::table('books', function (Blueprint $table) {
        //     $table->unique('slug');
        // }); 
        Schema::table('categories', function (Blueprint $table) {
            $table->unique('slug');
        });
        Schema::table('publishers', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropIfExists('authors_slug_unique');
        });
        // Schema::table('books', function (Blueprint $table) {
        //     $table->dropIfExists('books');
            
        // });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropIfExists('categories_slug_unique');
        });
        Schema::table('publishers', function (Blueprint $table) {
            $table->dropIfExists('publishers_slug_unique');
        });
    }
};
