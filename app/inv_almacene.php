<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_almacene extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $sortable = ['alm_codigo', 'alm_nombre'];
    protected $table = 'inv_almacenes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alm_codigo', 'alm_nombre'];

}
