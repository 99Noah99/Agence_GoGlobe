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


        Schema::create('reservation__reserver_voiture', function (Blueprint $table) {
            $table->id('Id_Reservation_Voiture');
            $table->unsignedBigInteger('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->unsignedBigInteger('Id_Facture');
            $table->foreign('Id_Facture')->references('Id_Facture')->on('payement__facture');
            $table->unsignedBigInteger('Id_Voiture');
            $table->foreign('Id_Voiture')->references('Id_Voiture')->on('transport__voiture');
            $table->date('Date_debut_reservation_voiture');
            $table->date('Date_fin_reservation_voiture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver_voiture');
    }
};
