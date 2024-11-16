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


        Schema::create('billet__billet_avion', function (Blueprint $table) {
            $table->id('Id_Billet_Avion');
            $table->decimal('Prix', 5, 2);
            $table->unsignedBigInteger('Id_Type_Siege_Avion');
            $table->unsignedBigInteger('Id_Facture')->unique()->nullable();
            $table->unsignedBigInteger('Id_Client')->nullable();
            $table->unsignedBigInteger('Id_Avion');
            $table->foreign('Id_Type_Siege_Avion')->references('Id_Type_Siege_Avion')->on('type__type_siege_avion');
            $table->foreign('Id_Facture')->references('Id_Facture')->on('payement__facture');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->foreign('Id_Avion')->references('Id_Avion')->on('transport__avion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billet_avion');
    }
};
