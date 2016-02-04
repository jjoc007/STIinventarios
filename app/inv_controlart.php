<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_controlart extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inv_controlarts';
    protected $sortable = ['ctl_articulo', 'ctl_cantstock'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ctl_articulo', 'ctl_cantstock'];

}
