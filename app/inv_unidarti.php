<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_unidarti extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_unidartis';
	protected $sortable = ['uni_articulo', 'uni_peso', 'uni_volumen', 'uni_largo', 'uni_alto', 'uni_presentacion', 'uni', 'uni_presemventa', 'uni_fecaud', 'uni_usuario'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['uni_articulo', 'uni_peso', 'uni_volumen', 'uni_largo', 'uni_alto', 'uni_presentacion', 'uni', 'uni_presemventa', 'uni_fecaud', 'uni_usuario'];

}
