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


        Schema::create('hebergement', function (Blueprint $table) {
            $table->integer('Id_Hebergement')->primary();
            $table->string('Nom', 50);
            $table->text('Description');
            $table->integer('Id_Ville');
            $table->foreign('Id_Ville')->references('Id_Ville')->on('localisation__ville');
            $table->integer('Id_Type_Hebergement');
            $table->foreign('Id_Type_Hebergement')->references('Id_Type_Hebergement')->on('type__type_hebergement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hebergement');
    }
};
