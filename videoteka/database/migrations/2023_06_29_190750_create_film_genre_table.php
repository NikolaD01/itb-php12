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
        Schema::create('film_genre', function (Blueprint $table){
            $table->unsignedBigInteger('film_id')->nullable(true);
            $table->unsignedBigInteger('genre_id')->nullable(true);

            $table->primary(['film_id', 'genre_id'], 'film_genre_pk');

            $table->foreign('film_id', 'film_genre_film_fk')->references('id')->on('films')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('genre_id', 'film_genre_genre_fk')->references('id')->on('genres')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_genre');
    }
};
