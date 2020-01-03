<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\BaseRepository;

/**
 * Class DoctorRepository
 * @package App\Repositories
 * @version December 30, 2019, 4:19 pm UTC
*/

class DoctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dr_regNum',
        'dr_regDate',
        'dr_image',
        'dr_specialist',
        'dr_license',
        'dr_name',
        'dr_gender',
        'dr_dob',
        'dr_address',
        'dr_contact',
        'dr_email',
        'dr_fee',
        'dr_timeIn',
        'dr_timeOut',
        'dr_daysAvail',
        'dr_status'
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
        return Doctor::class;
    }
}
