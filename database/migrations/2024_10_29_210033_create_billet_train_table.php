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


        Schema::create('billet__billet_train', function (Blueprint $table) {
            $table->id('Id_Billet_Train');
            $table->decimal('Prix', 5, 2);
            $table->unsignedBigInteger('Id_Train');
            $table->unsignedBigInteger('Id_Type_Siege_Train');
            $table->unsignedBigInteger('Id_Facture')->unique()->nullable();
            $table->unsignedBigInteger('Id_Client')->nullable();
            $table->foreign('Id_Train')->references('Id_Train')->on('transport__train');
            $table->foreign('Id_Type_Siege_Train')->references('Id_Type_Siege_Train')->on('type__type_siege_train');
            $table->foreign('Id_Facture')->references('Id_Facture')->on('payement__facture');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billet_train');
    }
};
