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
            $table->id('Id_Facture');
            $table->string('Intitule', 255);
            $table->decimal('Montant', 6, 2);
            $table->decimal('Restant_payer', 6, 2);
            $table->string('Fichier', 255);
            $table->date('Date_creation');
            $table->unsignedBigInteger('Id_Statut_Facture');
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
