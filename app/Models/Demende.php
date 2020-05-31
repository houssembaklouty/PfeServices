<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Demende
 * @package App\Models
 * @version May 30, 2020, 5:26 pm UTC
 *
 * @property string $proposition
 * @property integer $price
 * @property integer $id_post
 * @property integer $id_jobeur
 * @property boolean $etat
 */
class Demende extends Model
{
    use SoftDeletes;

    public $table = 'demendes';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'proposition',
        'price',
        'id_post',
        'id_jobeur',
        'etat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'proposition' => 'string',
        'price' => 'integer',
        'id_post' => 'integer',
        'id_jobeur' => 'integer',
        'etat' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'proposition' => 'required',
        'price' => 'required',
        'id_post' => 'required',
        'id_jobeur' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function jobeur()
    {
        return $this->belongsTo(\App\Jobeur::class, 'id_jobeur');
    }


}
