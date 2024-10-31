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


        Schema::create('reservation__reserver_chambre', function (Blueprint $table) {
            $table->integer('Id_Reservation_Chambre')->primary()->autoIncrement();
            $table->integer('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->integer('Id_Chambre');
            $table->foreign('Id_Chambre')->references('Id_Chambre')->on('chambre__chambre');
            $table->integer('Id_Facture');
            $table->foreign('Id_Facture')->references('Id_Facture')->on('payement__facture');
            $table->date('Date_debut_reservation_chambre');
            $table->date('Date_fin_reservation_chambre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver_chambre');
    }
};
