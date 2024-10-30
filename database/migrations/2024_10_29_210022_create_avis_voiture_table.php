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

        Schema::create('AVIS__avis_voiture', function (Blueprint $table) {
            $table->integer('Id_Avis_Voiture')->primary();
            $table->text('Commentaire');
            $table->date('Date_avis');
            $table->integer('Note');
            $table->integer('Id_Voiture');
            $table->foreign('Id_Voiture')->references('Id_Voiture')->on('voiture');
            $table->integer('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_voiture');
    }
};
