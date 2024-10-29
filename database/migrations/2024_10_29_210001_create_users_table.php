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

        Schema::create('users', function (Blueprint $table) {
            $table->integer('Id_User')->primary();
            $table->string('Nom', 25)->nullable();
            $table->string('Prenom', 25)->nullable();
            $table->string('Email', 150)->nullable();
            $table->string('Numero_tel', 15)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('password', 50)->nullable();
            $table->string('Role', 50)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
