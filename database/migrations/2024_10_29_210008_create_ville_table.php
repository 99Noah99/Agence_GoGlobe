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

        Schema::create('LOCALISATION__ville', function (Blueprint $table) {
            $table->integer('Id_Ville')->primary();
            $table->string('Nom', 50)->nullable();
            $table->integer('Id_Region');
            $table->foreign('Id_Region')->references('Id_Region')->on('region');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ville');
    }
};