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


        Schema::create('transport__deplacer_moyen_transport', function (Blueprint $table) {
            $table->integer('Id_Deplacement')->primary()->autoIncrement();
            $table->integer('Id_Moyen_Transport');
            $table->foreign('Id_Moyen_Transport')->references('Id_Moyen_Transport')->on('transport__moyen_transport');
            $table->integer('Id_Forfait');
            $table->foreign('Id_Forfait')->references('Id_Forfait')->on('forfait');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deplacer_moyen_transport');
    }
};
