<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// update tabele
// php artisan make:migration update_films_table 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::table('films', function (Blueprint $table)
        {
            $table->string('image')->nullable(true)->after('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('films', function (Blueprint $table)
        {
            $table->dropColumn('image');
        });

    }
};
