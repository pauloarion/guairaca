<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('from_id')->index();
            $table->unsignedBigInteger('to_id')->index();
            $table->foreign('from_id')->references('id')->on('airports');
            $table->foreign('to_id')->references('id')->on('airports');
            $table->string('name');
            $table->tinyInteger('active');
            $table->time('time');
            $table->enum('airline',['american_airlines','latam','gol','azul','tap'])->default('latam');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by'); 
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
        Schema::dropIfExists('flights');
    }
}
