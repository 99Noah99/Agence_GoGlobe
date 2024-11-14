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


        Schema::create('client', function (Blueprint $table) {
            $table->id('Id_Client');
            $table->date('Date_creation_compte');
            $table->string('Moyen_transport_pref', 50)->nullable();
            $table->string('Type_herbergement_pref', 50)->nullable();
            $table->unsignedBigInteger('Id_Categorie_Client_Forfait');
            $table->foreign('Id_Categorie_Client_Forfait')->references('Id_Categorie_Client_Forfait')->on('categorie_client_forfait');
            $table->unsignedBigInteger('Id_User')->unique();
            $table->foreign('Id_User')->references('Id_User')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
