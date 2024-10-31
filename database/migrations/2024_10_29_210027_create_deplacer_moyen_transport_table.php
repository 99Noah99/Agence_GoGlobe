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

        Schema::create('TRANSPORT__deplacer_moyen_transport', function (Blueprint $table) {
            $table->integer('Id_Deplacement')->primary()->autoIncrement();
            $table->integer('Id_Transport');
            $table->foreign('Id_Transport')->references('Id_Transport')->on('moyen_transport');
            $table->integer('Id_Forfait');
            $table->foreign('Id_Forfait')->references('Id_Forfait')->on('forfait');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deplacer_moyen_transport');
    }
};
