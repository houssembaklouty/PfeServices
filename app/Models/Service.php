<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 * @package App\Models
 * @version May 14, 2020, 5:52 pm UTC
 *
 * @property string $nom
 * @property string $description
 */
class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'description',
        'categorie_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'categorie_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Categorie::class, 'categorie_id');
    }

}
