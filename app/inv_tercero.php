<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_tercero extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_terceros';
	protected $sortable = ['ter_codigo', 'ter_alterno', 'ter_digverif', 'ter_nombre', 'ter_apellido', 'ter_naturaleza', 'ter_tipodni', 'ter_dni', 'ter_pais', 'ter_depart', 'ter_ciudad', 'ter_direcc1', 'ter_direcc2', 'ter_telefono1', 'ter_telefono2', 'ter_email1', 'ter_email12', 'ter_pagweb', 'ter_razscial', 'ter_zip', 'ter_ faceboock', 'ter_twiter', 'ter_instagram', 'ter_estado', 'ter_estrato', 'ter_Observaciones', 'ter_usuario', 'ter_fecha', 'ter_rfc', 'Tip_doc', 'ter_porc'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ter_codigo', 'ter_alterno', 'ter_digverif', 'ter_nombre', 'ter_apellido', 'ter_naturaleza', 'ter_tipodni', 'ter_dni', 'ter_pais', 'ter_depart', 'ter_ciudad', 'ter_direcc1', 'ter_direcc2', 'ter_telefono1', 'ter_telefono2', 'ter_email1', 'ter_email12', 'ter_pagweb', 'ter_razscial', 'ter_zip', 'ter_ faceboock', 'ter_twiter', 'ter_instagram', 'ter_estado', 'ter_estrato', 'ter_Observaciones', 'ter_usuario', 'ter_fecha', 'ter_rfc', 'Tip_doc', 'ter_porc'];

}
