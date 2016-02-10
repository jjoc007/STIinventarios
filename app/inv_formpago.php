<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_formpago extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_formpagos';
	protected $sortable = ['fmp_codigo', 'fmp_nombre', 'fmp_tipo'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fmp_codigo', 'fmp_nombre', 'fmp_tipo'];

}
