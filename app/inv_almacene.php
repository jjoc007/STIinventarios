<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_almacene extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_almacenes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alm_codigo', 'alm_nombre'];

}
