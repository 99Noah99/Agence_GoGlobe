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

        Schema::create('hebergement_forfait', function (Blueprint $table) {
            $table->integer('Id_Avoir_Hebergement')->primary()->autoIncrement();
            $table->integer('Id_Forfait');
            $table->foreign('Id_Forfait')->references('Id_Forfait')->on('forfait');
            $table->integer('Id_Hebergement');
            $table->foreign('Id_Hebergement')->references('Id_Hebergement')->on('hebergement');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hebergement_forfait');
    }
};
