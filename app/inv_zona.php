<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_zona extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_zonas';
     protected $sortable = ['zon_codigo', 'zon_nombre'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['zon_codigo', 'zon_nombre'];

}
