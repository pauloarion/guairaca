<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('passenger_id')->index();
            $table->unsignedBigInteger('flight_id')->index();
            $table->foreign('passenger_id')->references('id')->on('passengers');
            $table->foreign('flight_id')->references('id')->on('flights');
            $table->enum('kind',['economy','premium_economy','business_class','first_class'])->default('economy');
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
        Schema::dropIfExists('booking');
    }
}
