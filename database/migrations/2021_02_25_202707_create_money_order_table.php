<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_id');
            $table->string('c_first_name');
            $table->string('c_last_name');
            $table->string('c_document_name');
            $table->string('c_document_number');
            $table->string('c_email');
            $table->string('c_mobile_number');
            $table->string('sending_amount');
            $table->string('finaltaka');
            $table->string('charge');
            $table->string('r_first_name');
            $table->string('r_last_name');
            $table->string('r_phoneNumber');
            $table->string('payment_system');
            $table->string('order_date');
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
        Schema::dropIfExists('money_order');
    }
}
