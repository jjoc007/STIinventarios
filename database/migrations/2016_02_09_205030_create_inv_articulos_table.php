<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_articulos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('art_codigo');
$table->string('art_nombre');
$table->string('art_referencia');
$table->string('art_estado');
$table->string('art_codalterno');
$table->string('art_codbarra');
$table->string('art_presentacion');
$table->string('art_nomgeneric');
$table->string('art_marca');
$table->string('art_centrocos');
$table->dateTime('art_utlfeccomp');
$table->dateTime('art_ultfecventa');
$table->string('art_imagen');
$table->dateTime('art_fecexpedi');
$table->dateTime('art_fecvence');
$table->integer('art_lote');
$table->integer('art_talla');
$table->string('art_refrigeracion');
$table->string('art_paisorigen');
$table->string('art_coddian');
$table->string('art_codinvima');
$table->dateTime('art_fecauditoria');
$table->string('art_usuario');
$table->string('art_terminal');
$table->string('art_observacion');
$table->string('art_unidadmedida');
$table->string('art_tipmed');
$table->string('art_alm');

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
        Schema::drop('inv_articulos');
    }

}
