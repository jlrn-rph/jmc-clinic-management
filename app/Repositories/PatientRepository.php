<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Repositories\BaseRepository;

/**
 * Class PatientRepository
 * @package App\Repositories
 * @version December 30, 2019, 12:51 pm UTC
*/

class PatientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'px_regNumber',
        'px_regDate',
        'px_image',
        'px_name',
        'px_address',
        'px_dob',
        'px_gender',
        'px_contact',
        'px_email',
        'px_doctor',
        'px_status'
    ];

    protected $primaryKey = 'id';
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
        return Patient::class;
    }
}
