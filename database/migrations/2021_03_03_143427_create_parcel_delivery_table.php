<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_id');
            $table->string('s_name');
            $table->string('s_m_number');
            $table->string('s_email_address');
            $table->string('s_house_number');
            $table->string('s_post_code');
            $table->string('s_city');
            $table->string('s_country');
            $table->string('s_p_up_delivery');
            $table->string('s_p_up_time');
            $table->string('r_name');
            $table->string('r_m_number');
            $table->string('r_email_address');
            $table->string('r_house_number');
            $table->string('r_post_code');
            $table->string('r_city');
            $table->string('r_country');
            $table->string('comment');
            $table->timestamp('order_date')->useCurrent();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcel_delivery');
    }
}
