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

        Schema::create('LOCALISATION__region', function (Blueprint $table) {
            $table->integer('Id_Region')->primary();
            $table->string('Nom', 50);
            $table->integer('Id_Pays');
            $table->foreign('Id_Pays')->references('Id_Pays')->on('pays');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region');
    }
};
