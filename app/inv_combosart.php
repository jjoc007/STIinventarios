<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_combosart extends Model

{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_combosarts';
	protected $sortable = ['cmb_codigo', 'cmb_nombre', 'cmb_fecdesde', 'cmb_fechasta', 'cmb_usuario', 'cmb_fecaud'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cmb_codigo', 'cmb_nombre', 'cmb_fecdesde', 'cmb_fechasta', 'cmb_usuario', 'cmb_fecaud'];

}
