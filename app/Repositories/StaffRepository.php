<?php

namespace App\Repositories;

use App\Models\Staff;
use App\Repositories\BaseRepository;

/**
 * Class StaffRepository
 * @package App\Repositories
 * @version January 16, 2020, 7:55 pm UTC
*/

class StaffRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'stf_regNum',
        'stf_regDate',
        'stf_emType',
        'stf_department',
        'stf_image',
        'stf_name',
        'stf_gender',
        'stf_dob',
        'stf_Address',
        'stf_contact',
        'stf_email',
        'stf_status'
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
        return Staff::class;
    }
}
