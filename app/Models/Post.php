<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version May 18, 2020, 9:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $services
 * @property integer $title
 * @property integer $categorie
 * @property integer $service
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'client',
        'categorie',
        'service',
        'skills',
        'price',
        'description',
        'date',
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'client' => 'integer',
        'categorie' => 'integer',
        'service' => 'integer',
        'skills' => 'string',
        'price' => 'double',
        'description' => 'text',
        'date' => 'date',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'client' => 'required',
        'categorie' => 'required',
        'service' => 'required',
        'skills' => 'required',
        'price' => 'required',
        'description' => 'required',
        'date' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function catgeory()
    {
        return $this->belongsTo(\App\Models\Categorie::class, 'categorie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function service_relation()
    {
        return $this->belongsTo(\App\Models\Service::class, 'service', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     **/
    public function client_relation()
    {
        return $this->belongsTo(\App\Client::class, 'client', 'id');
    }

    public function propositions()
    {
        return $this->hasMany(\App\Models\Demende::class, 'id_post');
    }
}
