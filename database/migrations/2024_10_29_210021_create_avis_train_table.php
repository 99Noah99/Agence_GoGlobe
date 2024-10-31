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


        Schema::create('avis__avis_train', function (Blueprint $table) {
            $table->id('Id_Avis_Train');
            $table->text('Commentaire');
            $table->date('Date_avis');
            $table->integer('Note');
            $table->unsignedBigInteger('Id_Client');
            $table->foreign('Id_Client')->references('Id_Client')->on('client');
            $table->unsignedBigInteger('Id_Train');
            $table->foreign('Id_Train')->references('Id_Train')->on('transport__train');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_train');
    }
};
