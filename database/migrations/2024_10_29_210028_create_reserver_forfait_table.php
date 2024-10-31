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


        Schema::create('reservation__reserver_forfait', function (Blueprint $table) {
            $table->id('Id_Reservation_Forfait');
            $table->unsignedBigInteger('Id_Forfait');
            $table->foreign('Id_Forfait')->references('Id_Forfait')->on('forfait');
            $table->unsignedBigInteger('Id_Moyen_Transport');
            $table->foreign('Id_Moyen_Transport')->references('Id_Moyen_Transport')->on('transport__moyen_transport');
            $table->unsignedBigInteger('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->unsignedBigInteger('Id_Hebergement');
            $table->foreign('Id_Hebergement')->references('Id_Hebergement')->on('hebergement');
            $table->unsignedBigInteger('Id_Facture');
            $table->foreign('Id_Facture')->references('Id_Facture')->on('payement__facture');
            $table->date('Date_debut');
            $table->date('Date_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver_forfait');
    }
};
