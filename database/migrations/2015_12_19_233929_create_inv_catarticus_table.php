<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvCatarticusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inv_catarticus', function(Blueprint $table) {
                $table->increments('id');
                $table->string('cat_codigo');
$table->string('cat_nombre');

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
        Schema::drop('inv_catarticus');
    }

}
