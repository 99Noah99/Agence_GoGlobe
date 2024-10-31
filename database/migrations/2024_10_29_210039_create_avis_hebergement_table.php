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


        Schema::create('avis__avis_hebergement', function (Blueprint $table) {
            $table->integer('Id_Avis_Hebergement')->primary();
            $table->text('Commentaire');
            $table->date('Date_avis');
            $table->integer('Note_avis');
            $table->integer('Id_Hebergement');
            $table->foreign('Id_Hebergement')->references('Id_Hebergement')->on('hebergement');
            $table->integer('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_hebergement');
    }
};
