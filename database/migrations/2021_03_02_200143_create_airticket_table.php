<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirticketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airticket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_id');
            $table->string('d_from');
            $table->string('d_to');
            $table->string('no_of_adult');
            $table->string('no_of_child');
            $table->string('no_of_infant');
            $table->string('seat_type');
            $table->string('departing_date');
            $table->string('returning_date');
            $table->string('name');
            $table->string('m_number');
            $table->string('email');
            $table->string('trip_type');
            $table->string('status');
            $table->timestamp('order_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airticket');
    }
}
