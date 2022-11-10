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
        if(!Schema::hasTable('archive')){
            Schema::create('archive', function (Blueprint $table) {
                $table->id('ArchiveID');
                $table->string('Address');

                $table->unsignedBigInteger('ProductIDFK');

                $table->foreign('ProductIDFK')->on('Product')->references('ProductID');

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
        Schema::dropIfExists('archive');
    }
};
