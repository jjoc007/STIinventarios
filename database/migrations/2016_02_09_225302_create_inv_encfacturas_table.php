<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvEncfacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_encfacturas', function(Blueprint $table) {
                $table->increments('id');
                $table->string('efa_sucursal');
				$table->string('efa_documento');
				$table->string('efa_numero');
				$table->dateTime('efa_fecha');
				$table->string('efa_cliente');
				$table->dateTime('efa_fecaud');
				$table->string('efa_usuario');
				$table->string('efa_vendedor');
				$table->string('efa_observa');
				$table->string('efa_anulado');
				$table->dateTime('efa_fecanula');
				$table->string('efa_usuanula');
				$table->string('efa_motanula');
				$table->string('efa_formpag');
				$table->integer('efa_porcdesc');
				$table->integer('efa_valdesc');

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
        Schema::drop('inv_encfacturas');
    }

}
