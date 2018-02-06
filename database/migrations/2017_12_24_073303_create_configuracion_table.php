<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            //Esta tabla definirá las configuraciones generales de la plataforma

            $table->increments('id');
            $table->double('valor_tarifa');
            $table->integer('iva');
            //El valor porcentaje del pago hace referencia a la cominsión por porcejante que combra payU
            $table->double('valor_porcentaje_pago');
            //El valor porcentaje del pago hace referencia a la cominsión por valor fijo que combra payU
            $table->double('valor_fijo_pago');
            $table->string('merchantId');
            $table->string('signature');
            $table->string('accountId');
            $table->string('shippingCountry');

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
