<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
      
class CreateInvSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_sucursales', function(Blueprint $table) {
                $table->increments('id');
                $table->string('suc_codigo');
				$table->string('suc_nombre');
				$table->string('suc_direccion');

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
        Schema::drop('inv_sucursales');
    }

}
