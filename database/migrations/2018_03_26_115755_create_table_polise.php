<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePolise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polise', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_radnika');
            $table->foreign('id_radnika')->references('id')->on('radnici');
            $table->date('datum_prijave');
            $table->date('datum_odjave')->nullable($value = true);
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
        // 
        Schema::dropIfExists('polise');
    }
}
