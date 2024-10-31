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


        Schema::create('payement__payement', function (Blueprint $table) {
            $table->integer('Id_Payement')->primary();
            $table->integer('Date_creation');
            $table->decimal('Prix', 7, 2);
            $table->integer('Id_Type_Payement');
            $table->foreign('Id_Type_Payement')->references('Id_Type_Payement')->on('type__type_payement');
            $table->integer('Id_Statut_Payement');
            $table->foreign('Id_Statut_Payement')->references('Id_Statut_Payement')->on('payement__statut_payement');
            $table->integer('Id_Facture');
            $table->foreign('Id_Facture')->references('Id_Facture')->on('payement__facture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payement');
    }
};
