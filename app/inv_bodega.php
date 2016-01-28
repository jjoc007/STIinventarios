<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_bodega extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_bodegas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bod_codigo', 'bod_nombre'];

}
