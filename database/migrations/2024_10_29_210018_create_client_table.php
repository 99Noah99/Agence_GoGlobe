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

        Schema::create('client', function (Blueprint $table) {
            $table->integer('Id_Client')->primary();
            $table->date('Date_creation_compte');
            $table->string('Moyen_transport_pref', 50)->nullable();
            $table->string('Type_herbergement_pref', 50)->nullable();
            $table->integer('Id_Categorie_Client_Forfait');
            $table->foreign('Id_Categorie_Client_Forfait')->references('Id_Categorie_Client_Forfait')->on('categorie__client_forfait');
            $table->integer('Id_User')->unique();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
