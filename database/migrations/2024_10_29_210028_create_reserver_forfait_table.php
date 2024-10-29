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

        Schema::create('reserver_forfait', function (Blueprint $table) {
            $table->integer('Id_Reservation_Forfait')->primary()->autoIncrement();
            $table->integer('Id_Forfait');
            $table->foreign('Id_Forfait')->references('Id_Forfait')->on('forfait');
            $table->integer('Id_Transport')->nullable();
            $table->foreign('Id_Transport')->references('Id_Transport')->on('moyen_transport');
            $table->integer('Id_Client')->nullable();
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->integer('Id_Hebergement')->nullable();
            $table->foreign('Id_Hebergement')->references('Id_Hebergement')->on('hebergement');
            $table->integer('Id_Facture')->nullable();
            $table->foreign('Id_Facture')->references('Id_Facture')->on('facture');
            $table->date('Date_debut')->nullable();
            $table->date('Date_fin')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver_forfait');
    }
};
