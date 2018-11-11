<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatogerySevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catogery_sevice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('services_id')->unsigned();
            $table->integer('cat_id')->unsigned();
             $table->foreign('services_id')->references('id')->on('sevices')->onDelete('cascade')->onDelet('cascade');
             $table->foreign('cat_id')->references('id')->on('catogeries')->onDelete('cascade')->onDelet('cascade');
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
        Schema::dropIfExists('catogery_sevice');
    }
}
