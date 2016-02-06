<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_ciudade extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_ciudades';
	protected $sortable = ['ciu_depart', 'ciu_codigo', 'ciu_nombre'];
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ciu_depart', 'ciu_codigo', 'ciu_nombre'];

}
