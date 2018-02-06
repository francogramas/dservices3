<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitudes', function($table) {
            $table->integer('tarifas_id')->unsigned()->index()->default('1')->after('motivocancelacion');
            $table->double('valor')->default('0')->after('motivocancelacion');;
            $table->boolean('facturada')->default('0')->after('motivocancelacion');;

            $table->foreign('tarifas_id')->references('id')->on('tarifas');
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
