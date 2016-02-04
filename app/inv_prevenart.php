<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_prevenart extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_prevenarts';
    protected $sortable = ['prv_codigo', 'prv_intervenini', 'prv_intervenfin', 'prv_unidad', 'prv_valor', 'prv_vigencia', 'prv_usuario', 'prv_fecaud'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prv_codigo', 'prv_intervenini', 'prv_intervenfin', 'prv_unidad', 'prv_valor', 'prv_vigencia', 'prv_usuario', 'prv_fecaud'];

}
