<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_documento extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_documentos';
	protected $sortable = ['doc_codigo', 'doc_descripcion', 'doc_clase', 'doc_secuencia', 'doc_modulo', 'doc_estado', 'doc_obser', 'doc_fecaud', 'doc_usuario'];
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['doc_codigo', 'doc_descripcion', 'doc_clase', 'doc_secuencia', 'doc_modulo', 'doc_estado', 'doc_obser', 'doc_fecaud', 'doc_usuario'];

}
