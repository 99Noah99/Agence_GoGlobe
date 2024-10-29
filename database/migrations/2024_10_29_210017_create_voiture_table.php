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

        Schema::create('TRANSPORT__voiture', function (Blueprint $table) {
            $table->integer('Id_Voiture')->primary();
            $table->string('Marque', 50)->nullable();
            $table->string('Modele', 50)->nullable();
            $table->string('Puissance', 50)->nullable();
            $table->decimal('Prix', 5, 2)->nullable();
            $table->binary('Image')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voiture');
    }
};
