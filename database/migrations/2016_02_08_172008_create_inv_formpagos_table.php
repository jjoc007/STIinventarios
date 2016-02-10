<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvFormpagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_formpagos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('fmp_codigo');
			$table->string('fmp_nombre');
			$table->string('fmp_tipo');

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
        Schema::drop('inv_formpagos');
    }

}
