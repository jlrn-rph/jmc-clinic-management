<?php

namespace App\Repositories;

use App\Models\LabTest;
use App\Repositories\BaseRepository;

/**
 * Class LabTestRepository
 * @package App\Repositories
 * @version December 31, 2019, 10:48 am UTC
*/

class LabTestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lt_name',
        'lt_cost'
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
        return LabTest::class;
    }
}
