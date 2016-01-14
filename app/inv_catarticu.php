<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_catarticu extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_catarticus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cat_codigo', 'cat_nombre'];

}
