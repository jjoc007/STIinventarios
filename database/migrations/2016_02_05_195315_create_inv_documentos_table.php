<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_documentos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('doc_codigo');
				$table->string('doc_descripcion');
				$table->string('doc_clase');
				$table->integer('doc_secuencia');
				$table->string('doc_modulo');
				$table->string('doc_estado');
				$table->string('doc_obser');
				$table->dateTime('doc_fecaud');
				$table->string('doc_usuario');

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
        Schema::drop('inv_documentos');
    }

}
