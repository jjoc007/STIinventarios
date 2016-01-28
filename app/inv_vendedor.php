<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_vendedor extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_vendedors';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ven_codigo', 'ven_nombre', 'ven_zona'];

}
