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

        Schema::create('BILLET__billet_bus', function (Blueprint $table) {
            $table->integer('Id_Billet_Bus')->primary();
            $table->decimal('Prix', 5, 2);
            $table->integer('Id_Facture')->unique();
            $table->integer('Id_Client');
            $table->integer('Id_Bus');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->foreign('Id_Bus')->references('Id_Bus')->on('bus');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billet_bus');
    }
};
