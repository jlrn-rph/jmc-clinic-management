<?php

namespace App\Repositories;

use App\Models\Consult;
use App\Models\Patient;
use App\Repositories\BaseRepository;

/**
 * Class ConsultRepository
 * @package App\Repositories
 * @version December 30, 2019, 3:29 pm UTC
*/

class ConsultRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'con_dateSxStart',
        'patients_id',
        'con_height',
        'con_weight',
        'con_bp',
        'con_symptom',
        'con_diagnosis',
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
        return Consult::class;
    }
}
