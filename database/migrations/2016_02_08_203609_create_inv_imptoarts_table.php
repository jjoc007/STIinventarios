<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvImptoartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_imptoarts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('ima_articulo');
				$table->string('ima_codigo');
				$table->string('ima_nom');
				$table->integer('ima_porcent');
				$table->integer('ima_basimpto');
				$table->string('ima_observacion');
				$table->string('ima_estado');
				$table->dateTime('ima_fecaud');

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
        Schema::drop('inv_imptoarts');
    }

}
