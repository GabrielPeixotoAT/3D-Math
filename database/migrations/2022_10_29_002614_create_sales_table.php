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
        Schema::create('sale', function (Blueprint $table) {
            $table->id('SaleID');
            $table->decimal('Total');

            $table->unsignedInteger('PaymentTypeIDFK');
            $table->unsignedInteger('ClientIDFK');

            $table->foreign('PaymentTypeIDFK')->on('PaymentType')->references('PaymentTypeID');
            $table->foreign('ClientIDFK')->on('Client')->references('ClientID');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
