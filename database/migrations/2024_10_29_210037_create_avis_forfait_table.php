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

        Schema::create('AVIS__avis_forfait', function (Blueprint $table) {
            $table->integer('Id_Avis_Forfait')->primary();
            $table->text('Commentaire')->nullable();
            $table->date('Date_avis')->nullable();
            $table->integer('Note')->nullable();
            $table->integer('Id_Forfait');
            $table->foreign('Id_Forfait')->references('Id_Forfait')->on('forfait');
            $table->integer('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_forfait');
    }
};