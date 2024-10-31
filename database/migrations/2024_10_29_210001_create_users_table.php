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
            $table->string('Nom', 25);
            $table->string('Prenom', 25);
            $table->string('Email', 150);
            $table->string('Numero_tel', 15)->nullable();
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('Role', 50);
            $table->timestamps();
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
