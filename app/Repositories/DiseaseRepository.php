<?php

namespace App\Repositories;

use App\Models\Disease;
use App\Repositories\BaseRepository;

/**
 * Class DiseaseRepository
 * @package App\Repositories
*/

class DiseaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return Disease::class;
    }
}
