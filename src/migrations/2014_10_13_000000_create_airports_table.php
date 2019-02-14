<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 02:06
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->increments('id')
                ->comment('table to store airports data');
            $table->string('ident', 10)
                ->comment('airport identity');
            $table->string('type', 20);
            $table->string('name', 75);
            $table->double('latitude_deg', 16, 10)
                ->nullable(false)
                ->default(0);
            $table->double('longitude_deg', 16, 10)
                ->nullable(false)
                ->default(0);
            $table->integer('elevation_ft');
            $table->string('continent', 5);
            $table->string('iso_country', 5);
            $table->string('iso_region', 10);
            $table->string('municipality', 15);
            $table->string('scheduled_service', 5);
            $table->string('gps_code', 5);
            $table->string('iata_code', 5);
            $table->string('local_code', 20);
            $table->string('home_link');
            $table->string('wikipedia_link');
            $table->string('keywords');
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
        Schema::dropIfExists('airports');
    }
}