<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_zona extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_zonas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['zon_codigo', 'zon_nombre'];

}
