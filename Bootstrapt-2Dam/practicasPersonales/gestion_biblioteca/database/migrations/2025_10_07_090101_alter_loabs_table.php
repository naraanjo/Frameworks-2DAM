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
        Schema::table('loabs',function(Blueprint $table) {
          $table->unsignedBigInteger('books_id'); // Create new column
          $table->foreign('books_id')->references('id')->on('books'); // Create new foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
