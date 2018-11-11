<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CitiesSevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('cities_sevice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('servies_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->foreign('servies_id')->references('id')->on('sevices')->onDelete('cascade')->onDelet('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onDelet('cascade');
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
    }
}
