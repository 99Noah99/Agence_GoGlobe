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


        Schema::create('forfait', function (Blueprint $table) {
            $table->id('Id_Forfait');
            $table->string('Intitule', 200);
            $table->integer('Duree');
            $table->decimal('Prix', 7, 2);
            $table->string('Image', 255);
            $table->unsignedBigInteger('Id_Categorie_Client_Forfait');
            $table->foreign('Id_Categorie_Client_Forfait')->references('Id_Categorie_Client_Forfait')->on('categorie_client_forfait');
            $table->unsignedBigInteger('Id_Type_Forfait_Voyage');
            $table->foreign('Id_Type_Forfait_Voyage')->references('Id_Type_Forfait_Voyage')->on('type__type_forfait_voyage');
            $table->unsignedBigInteger('Id_Personnel');
            $table->foreign('Id_Personnel')->references('Id_Personnel')->on('personnel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forfait');
    }
};
