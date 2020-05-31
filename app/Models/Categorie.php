<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categorie
 * @package App\Models
 * @version May 14, 2020, 5:40 pm UTC
 *
 * @property string $nom
 */
class Categorie extends Model
{
    use SoftDeletes;

    public $table = 'categories';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'description',
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
        'nom' => 'required'
    ];

    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'categorie_id');
    }


}
