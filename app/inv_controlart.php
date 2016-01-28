<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_controlart extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_controlarts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ctl_articulo', 'ctl_cantstock'];

}
