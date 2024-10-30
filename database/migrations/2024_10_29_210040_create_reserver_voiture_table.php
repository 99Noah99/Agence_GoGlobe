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

        Schema::create('reserver_voiture', function (Blueprint $table) {
            $table->integer('Id_Reservation_Voiture')->primary()->autoIncrement();
            $table->integer('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->integer('Id_Facture');
            $table->foreign('Id_Facture')->references('Id_Facture')->on('facture');
            $table->integer('Id_Voiture');
            $table->foreign('Id_Voiture')->references('Id_Voiture')->on('voiture');
            $table->date('Date_debut_reservation_voiture');
            $table->date('Date_fin_reservation_voiture');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver_voiture');
    }
};
