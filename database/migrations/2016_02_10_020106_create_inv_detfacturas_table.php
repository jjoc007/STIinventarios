<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvDetfacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_detfacturas', function(Blueprint $table) {
                $table->increments('id');
                $table->string('dfa_sucursal');
$table->string('dfa_documento');
$table->string('dfa_numero');
$table->dateTime('dfa_fecha');
$table->integer('dfa_item');
$table->string('dfa_articulo');
$table->string('dfa_linea');
$table->integer('dfa_cantidad');
$table->integer('dfa_vlrunitario');
$table->integer('dfa_porcdescuen');
$table->integer('dfa_vlrdescuen');
$table->string('dfa_presentacion');
$table->integer('dfa_impuesto');
$table->integer('dfa_total');
$table->string('dfa_ubicacion');
$table->string('dfa_usuario');
$table->dateTime('dfa_fecaud');

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
        Schema::drop('inv_detfacturas');
    }

}
