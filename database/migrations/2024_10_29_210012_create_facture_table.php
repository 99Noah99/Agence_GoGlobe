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


        Schema::create('payement__facture', function (Blueprint $table) {
            $table->integer('Id_Facture')->primary();
            // $table->foreign('Id_Facture')->references('Id_Facture')->on('billet__billet_bus');
            $table->string('Intitule', 50);
            $table->decimal('Montant', 7, 2);
            $table->date('Date_creation');
            $table->integer('Id_Statut_Facture');
            $table->foreign('Id_Statut_Facture')->references('Id_Statut_Facture')->on('payement__statut_facture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facture');
    }
};
