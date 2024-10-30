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
        Schema::disableForeignKeyConstraints();

        Schema::create('TRANSPORT__bus', function (Blueprint $table) {
            $table->integer('Id_Bus')->primary();
            $table->time('Heure_depart');
            $table->time('Heure_arriver');
            $table->date('Date_depart');
            $table->date('Date_arriver');
            $table->integer('Id_Ville_Depart');
            $table->foreign('Id_Ville_Depart')->references('Id_Ville')->on('ville');
            $table->integer('Id_Ville_Arriver');
            $table->foreign('Id_Ville_Arriver')->references('Id_Ville')->on('ville');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus');
    }
};
