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
        Schema::create('genres', function (Blueprint $table) {
           //  $table->id()->unsigned()->primary()->autoIncrement();
            $table->id();
            $table->string('name_en')->nullable(false)->unique(); // varchar (ime, broj duzine) nullable(polje ne moze da bude prazno)
            $table->string('name_sr')->nullable(true)->unique();
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
