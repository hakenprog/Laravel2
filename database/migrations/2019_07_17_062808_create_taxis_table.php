<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxis', function (Blueprint $table) {
            $table->increments('id_Taxi');
            $table->unsignedBigInteger('id_Conductor');
            $table->string('Marca');
            $table->string('Modelo');
            $table->timestamps();
            
            $table->foreign('id_Conductor')->references('id_Conductor')->on('conductors'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxis');
    }
}
