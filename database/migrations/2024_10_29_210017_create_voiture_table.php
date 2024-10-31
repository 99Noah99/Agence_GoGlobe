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
            $table->string('Marque', 50);
            $table->string('Modele', 50);
            $table->string('Puissance', 50);
            $table->decimal('Prix', 5, 2);
            $table->string('Image', 255);
            $table->timestamps();
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
