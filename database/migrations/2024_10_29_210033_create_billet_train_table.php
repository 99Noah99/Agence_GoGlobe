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

        Schema::create('billet_train', function (Blueprint $table) {
            $table->integer('Id_Billet_Train')->primary();
            $table->decimal('Prix', 5, 2)->nullable();
            $table->integer('Id_Train');
            $table->foreign('Id_Train')->references('Id_Train')->on('train');
            $table->integer('Id_Type_Siege_Train');
            $table->foreign('Id_Type_Siege_Train')->references('Id_Type_Siege_Train')->on('type_siege_train');
            $table->integer('Id_Facture')->unique();
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
        Schema::dropIfExists('billet_train');
    }
};
