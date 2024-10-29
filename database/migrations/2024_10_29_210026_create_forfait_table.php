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

        Schema::create('forfait', function (Blueprint $table) {
            $table->integer('Id_Forfait')->primary();
            $table->string('Intitule', 200)->nullable();
            $table->integer('Duree')->nullable();
            $table->decimal('Prix', 7, 2)->nullable();
            $table->integer('Id_Categorie_Client_Forfait');
            $table->foreign('Id_Categorie_Client_Forfait')->references('Id_Categorie_Client_Forfait')->on('categorie__client_forfait');
            $table->integer('Id_Type_Forfait_Voyage');
            $table->foreign('Id_Type_Forfait_Voyage')->references('Id_Type_Forfait_Voyage')->on('type_forfait_voyage');
            $table->integer('Id_Personnel');
            $table->foreign('Id_Personnel')->references('Id_Personnel')->on('personnel');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forfait');
    }
};
