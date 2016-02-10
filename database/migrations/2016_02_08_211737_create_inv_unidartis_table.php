<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvUnidartisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_unidartis', function(Blueprint $table) {
                $table->increments('id');
                $table->string('uni_articulo');
				$table->integer('uni_peso');
				$table->integer('uni_volumen');
				$table->integer('uni_largo');
				$table->integer('uni_alto');
				$table->string('uni_presentacion');
				$table->string('uni_presembalaje');
				$table->string('uni_presemventa');
				$table->dateTime('uni_fecaud');
				$table->string('uni_usuario');

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
        Schema::drop('inv_unidartis');
    }

}
