<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inv_detfactura extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_detfacturas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dfa_sucursal', 'dfa_documento', 'dfa_numero', 'dfa_fecha', 'dfa_item', 'dfa_articulo', 'dfa_linea', 'dfa_cantidad', 'dfa_vlrunitario', 'dfa_porcdescuen', 'dfa_vlrdescuen', 'dfa_presentacion', 'dfa_impuesto', 'dfa_total', 'dfa_ubicacion', 'dfa_usuario', 'dfa_fecaud'];

}
