<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_sucursale extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_sucursales';
	protected $sortable = ['suc_codigo', 'suc_nombre', 'suc_direccion'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['suc_codigo', 'suc_nombre', 'suc_direccion'];

}
