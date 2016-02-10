<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_articulo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_articulos';
	protected $sortable = ['art_codigo', 'art_nombre', 'art_referencia', 'art_estado', 'art_codalterno', 'art_codbarra', 'art_presentacion', 'art_nomgeneric', 'art_marca', 'art_centrocos', 'art_utlfeccomp', 'art_ultfecventa', 'art_imagen', 'art_fecexpedi', 'art_fecvence', 'art_lote', 'art_talla', 'art_refrigeracion', 'art_paisorigen', 'art_coddian', 'art_codinvima', 'art_fecauditoria', 'art_usuario', 'art_terminal', 'art_observacion', 'art_unidadmedida', 'art_tipmed', 'art_alm'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['art_codigo', 'art_nombre', 'art_referencia', 'art_estado', 'art_codalterno', 'art_codbarra', 'art_presentacion', 'art_nomgeneric', 'art_marca', 'art_centrocos', 'art_utlfeccomp', 'art_ultfecventa', 'art_imagen', 'art_fecexpedi', 'art_fecvence', 'art_lote', 'art_talla', 'art_refrigeracion', 'art_paisorigen', 'art_coddian', 'art_codinvima', 'art_fecauditoria', 'art_usuario', 'art_terminal', 'art_observacion', 'art_unidadmedida', 'art_tipmed', 'art_alm'];

}
