<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPrevenartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_prevenarts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('prv_codigo');
                $table->integer('prv_intervenini');
                $table->integer('prv_intervenfin');
                $table->integer('prv_unidad');
                $table->integer('prv_valor');
                $table->date('prv_vigencia');
                $table->string('prv_usuario');
                $table->dateTime('prv_fecaud');

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
        Schema::drop('inv_prevenarts');
    }

}
