<?php

namespace App\Repositories;

use App\Jobeur;
use App\Repositories\BaseRepository;

/**
 * Class JobeurRepository
 * @package App\Repositories
 * @version May 16, 2020, 5:40 pm UTC
*/

class JobeurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom'
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
        return Jobeur::class;
    }
}
