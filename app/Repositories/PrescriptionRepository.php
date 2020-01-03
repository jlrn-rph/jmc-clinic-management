<?php

namespace App\Repositories;

use App\Models\Prescription;
use App\Repositories\BaseRepository;

/**
 * Class PrescriptionRepository
 * @package App\Repositories
 * @version December 30, 2019, 4:24 pm UTC
*/

class PrescriptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rx_generic',
        'rx_brand',
        'rx_freq',
        'rx_days',
        'rx_instruct'
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
        return Prescription::class;
    }
}
