<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_terceros', function(Blueprint $table) {
                $table->increments('id');
                $table->string('ter_codigo');
$table->string('ter_alterno');
$table->string('ter_digverif');
$table->string('ter_nombre');
$table->string('ter_apellido');
$table->string('ter_naturaleza');
$table->string('ter_tipodni');
$table->string('ter_dni');
$table->string('ter_pais');
$table->string('ter_depart');
$table->string('ter_ciudad');
$table->string('ter_direcc1');
$table->string('ter_direcc2');
$table->string('ter_telefono1');
$table->string('ter_telefono2');
$table->string('ter_email1');
$table->string('ter_email12');
$table->string('ter_pagweb');
$table->string('ter_razscial');
$table->string('ter_zip');
$table->string('ter_ faceboock');
$table->string('ter_twiter');
$table->string('ter_instagram');
$table->string('ter_estado');
$table->integer('ter_estrato');
$table->string('ter_Observaciones');
$table->string('ter_usuario');
$table->dateTime('ter_fecha');
$table->string('ter_rfc');
$table->string('Tip_doc');
$table->integer('ter_porc');

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
        Schema::drop('inv_terceros');
    }

}
