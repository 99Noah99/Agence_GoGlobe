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


        Schema::create('users', function (Blueprint $table) {
            $table->id('Id_User');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email');
            $table->string('Numero_tel', 15)->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('Role', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
