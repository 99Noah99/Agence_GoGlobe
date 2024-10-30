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

        Schema::create('chambre', function (Blueprint $table) {
            $table->integer('Id_Chambre')->primary();
            $table->integer('Numero');
            $table->integer('Nb_personne');
            $table->integer('Id_Hebergement');
            $table->foreign('Id_Hebergement')->references('Id_Hebergement')->on('hebergement');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambre');
    }
};
