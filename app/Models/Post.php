<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version May 16, 2020, 3:01 pm UTC
 *
 * @property integer $client_id
 * @property string $commentaire
 * @property string $statut
 * @property string $type
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'client_id',
        'commentaire',
        'statut',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'statut' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'client_id' => 'required',
        'commentaire' => 'required',
        'statut' => 'required',
        'type' => 'required'
    ];

    public function client()
    {
        return $this->belongsTo(\App\Client::class, 'client_id');
    }

}
