<?php

namespace App\Repositories;

use App\Models\Laboratory;
use App\Repositories\BaseRepository;

/**
 * Class LaboratoryRepository
 * @package App\Repositories
 * @version December 31, 2019, 9:51 am UTC
*/

class LaboratoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lab_regNumber',
        'lab_regDate',
        'lab_name',
        'lab_address',
        'lab_dob',
        'lab_gender',
        'lab_contact',
        'lab_email',
        'lab_doctor',
        'lab_test',
        'lab_status'
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
        return Laboratory::class;
    }
}
