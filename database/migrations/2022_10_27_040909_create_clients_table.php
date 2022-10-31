<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('ClientID');
            $table->string('Name');
            $table->string('Email'); 
            $table->string('Cpf');
            $table->string('Password');
            $table->unsignedBigInteger('OccupationIDFK');
            $table->timestamps();

            $table->foreign('OccupationIDFK')->on('occupation')->references('OccupationID')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
};
