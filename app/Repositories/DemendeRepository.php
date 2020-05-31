<?php

namespace App\Repositories;

use App\Models\Demende;
use App\Repositories\BaseRepository;

/**
 * Class DemendeRepository
 * @package App\Repositories
 * @version May 30, 2020, 5:26 pm UTC
*/

class DemendeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proposition',
        'price',
        'id_post',
        'id_jobeur',
        'etat'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Demende::class;
    }
}
