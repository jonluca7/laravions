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
        Schema::create('avions', function (Blueprint $table) {
            $table->id();
     
         /*
            $table->string('registration_code');
            $table->string('Base10');
            $table->int('wing_span ');
            $table->int('commissioning_year');
            $table->string('latest_inspection_date');
            $table->int('total_flight_hours ');
            $table->string('latest_pilote_name');

            **/

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
        Schema::dropIfExists('avions');
    }
};
