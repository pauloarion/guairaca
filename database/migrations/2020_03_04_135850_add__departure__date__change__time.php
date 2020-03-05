<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartureDateChangeTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $platform = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform(); 
        $platform->registerDoctrineTypeMapping('enum', 'string');

        Schema::table('flights', function (Blueprint $table) {
            $table->date('departure_date')->default('2020-02-02');
            $table->renameColumn('time', 'departure_time');
            $table->integer('duration')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $platform = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform(); 
        $platform->registerDoctrineTypeMapping('enum', 'string');

        Schema::table('flights', function (Blueprint $table) {
            $table->dropColumn('departure_date');
            $table->renameColumn('departure_time', 'time');
            $table->dropColumn('duration');
        });
    }
}
