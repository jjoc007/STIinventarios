<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_imptoart extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_imptoarts';
	protected $sortable = ['ima_articulo', 'ima_codigo', 'ima_nom', 'ima_porcent', 'ima_basimpto', 'ima_observacion', 'ima_estado', 'ima_fecaud'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ima_articulo', 'ima_codigo', 'ima_nom', 'ima_porcent', 'ima_basimpto', 'ima_observacion', 'ima_estado', 'ima_fecaud'];

}
