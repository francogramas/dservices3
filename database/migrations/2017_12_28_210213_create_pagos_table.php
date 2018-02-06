<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state_pol');
            $table->double('risk');
            $table->string('response_code_pol');
            $table->string('reference_sale');
            $table->string('reference_pol');
            $table->integer('payment_method');
            $table->integer('payment_method_type');
            $table->integer('value');
            $table->date('transaction_date');
            $table->string('currency');
            $table->string('email_buyer');
            $table->string('cus');
            $table->string('pse_bank');
            $table->boolean('test');
            $table->integer('payment_method_id');
            $table->integer('payment_request_state');
            $table->string('response_message_pol');
            $table->string('transaction_id');
            

            //
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
        //
    }
}
