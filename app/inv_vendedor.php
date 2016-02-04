<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_vendedor extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_vendedors';
    protected $sortable =  ['ven_codigo', 'ven_nombre', 'ven_zona'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ven_codigo', 'ven_nombre', 'ven_zona'];

}
