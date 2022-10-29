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
        if(!Schema::hasTable('product')){
            Schema::create('product', function (Blueprint $table) {
                $table->id('ProductID');
                $table->string('Name', 100);
                $table->decimal('Price',24);
                $table->string('Description',900);
                $table->unsignedBigInteger('NumberOfSales');

                $table->unsignedBigInteger('CategoryIDFK');

                $table->foreign('CategoryIDFK')->on('Category')->references('CategoryID');
                
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
        Schema::dropIfExists('product');
    }
};
