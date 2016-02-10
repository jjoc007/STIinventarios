<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvCombosartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_combosarts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('cmb_codigo');
				$table->string('cmb_nombre');
				$table->dateTime('cmb_fecdesde');
				$table->dateTime('cmb_fechasta');
				$table->string('cmb_usuario');
				$table->dateTime('cmb_fecaud');

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
        Schema::drop('inv_combosarts');
    }

}
