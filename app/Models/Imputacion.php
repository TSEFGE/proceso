<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Victima
 * @package App\Models
 * @version May 12, 2017, 9:38 pm UTC
 */
class Imputacion extends Model
{
    use SoftDeletes;

    public $table = 'imputacion';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idVictima',
        'idImputado',
        'idDelito',
        'idTipoRelacion',
        'idProceso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idVictima' => 'integer',
        'idImputado' => 'integer',
        'idDelito' => 'integer',
        'idTipoRelacion' => 'integer',
        'idProceso'=> 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idVictima' => 'required',
        'idImputado' => 'required',
        'idDelito' => 'required',
        'idProceso' => 'required'
    ];

    
}
