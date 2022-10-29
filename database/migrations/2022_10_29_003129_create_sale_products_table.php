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
        if(!Schema::hasTable('saleproduct')){
            Schema::create('saleproduct', function (Blueprint $table) {
                $table->id('SaleProductID');
                $table->unsignedInteger('Amount');
                $table->decimal('PriceUnit');

                $table->unsignedBigInteger('ProductIDFK');
                $table->unsignedBigInteger('SaleIDFK');

                $table->foreign('ProductIDFK')->on('Product')->references('ProductID');
                $table->foreign('SaleIDFK')->on('Sale')->references('SaleID');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saleproduct');
    }
};
