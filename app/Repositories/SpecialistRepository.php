<?php

namespace App\Repositories;

use App\Models\Specialist;
use App\Repositories\BaseRepository;

/**
 * Class SpecialistRepository
 * @package App\Repositories
 * @version December 29, 2019, 9:51 am UTC
*/

class SpecialistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sp_name'
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
        return Specialist::class;
    }
}
