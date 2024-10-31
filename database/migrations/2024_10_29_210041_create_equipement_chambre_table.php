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


        Schema::create('chambre__equipement_chambre', function (Blueprint $table) {
            $table->integer('Id_Equipement_Chambre')->nullable()->autoIncrement();
            $table->integer('Id_Chambre');
            $table->foreign('Id_Chambre')->references('Id_Chambre')->on('chambre__chambre');
            $table->integer('Id_Equipement');
            $table->foreign('Id_Equipement')->references('Id_Equipement')->on('chambre__equipement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipement_chambre');
    }
};
