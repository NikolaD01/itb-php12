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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->smallInteger('year', false, true)->nullable(false);
             // godina false/mi zadajemo unsigned(true)
            // $table->unsignedSmallInteger('year');
            $table->smallInteger('running_h', false, true)->nullable(true);
            $table->smallInteger('running_m,', false, true)->nullable(true);
            $table->decimal('rating', 3, 1, true)->nullable(true); // nullable true moze da se ne unese 
            // totalna duzina broja je 1 // najduzi broj 1.0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
