<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_ciudades', function(Blueprint $table) {
                $table->increments('id');
                $table->string('ciu_depart');
				$table->string('ciu_codigo');
				$table->string('ciu_nombre');

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
        Schema::drop('inv_ciudades');
    }

}
