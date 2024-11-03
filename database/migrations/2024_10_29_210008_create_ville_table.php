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


        Schema::create('localisation__ville', function (Blueprint $table) {
            $table->id('Id_Ville');
            $table->string('Nom', 255);
            $table->unsignedBigInteger('Id_Region');
            $table->foreign('Id_Region')->references('Id_Region')->on('localisation__region');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ville');
    }
};
