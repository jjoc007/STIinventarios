<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_encfactura extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_encfacturas';
	protected $sortable = ['efa_sucursal', 'efa_documento', 'efa_numero', 'efa_fecha', 'efa_cliente', 'efa_fecaud', 'efa_usuario', 'efa_vendedor', 'efa_observa', 'efa_anulado', 'efa_fecanula', 'efa_usuanula', 'efa_motanula', 'efa_formpag', 'efa_porcdesc', 'efa_valdesc'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['efa_sucursal', 'efa_documento', 'efa_numero', 'efa_fecha', 'efa_cliente', 'efa_fecaud', 'efa_usuario', 'efa_vendedor', 'efa_observa', 'efa_anulado', 'efa_fecanula', 'efa_usuanula', 'efa_motanula', 'efa_formpag', 'efa_porcdesc', 'efa_valdesc'];

}
