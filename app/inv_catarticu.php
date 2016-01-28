<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gbrock\Table\Traits\Sortable;

class inv_catarticu extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */

    use Sortable;

    protected $sortable = ['cat_codigo', 'cat_nombre'];
    protected $table = 'inv_catarticus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cat_codigo', 'cat_nombre'];

}
