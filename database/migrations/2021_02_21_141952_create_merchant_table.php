<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('p_mb_number');
            $table->string('b_mb_number');
            $table->string('d_of_birth');
            $table->string('s_l_number');
            $table->string('email');
            $table->string('pec_mail');
            $table->string('store_address');
            $table->string('city');
            $table->string('p_code');
            $table->string('country');
            $table->string('i_card_number');
            $table->string('reff_name')->nullable();
            $table->string('charge');
            $table->string('m_username');
            $table->string('m_password');
            $table->string('remaining_balance')->nullable();
            $table->string('total_balance')->nullable();
            $table->string('issue_date')->nullable();
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchant');
    }
}
