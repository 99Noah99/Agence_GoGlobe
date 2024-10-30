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

        Schema::create('BILLET__billet_avion', function (Blueprint $table) {
            $table->integer('Id_Billet_Avion')->primary();
            $table->decimal('Prix', 5, 2);
            $table->integer('Id_Type_Siege_Avion');
            $table->foreign('Id_Type_Siege_Avion')->references('Id_Type_Siege_Avion')->on('type_siege_avion');
            $table->integer('Id_Facture')->unique();
            $table->integer('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->integer('Id_Avion');
            $table->foreign('Id_Avion')->references('Id_Avion')->on('avion');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billet_avion');
    }
};
