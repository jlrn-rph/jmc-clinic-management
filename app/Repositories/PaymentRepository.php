<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\BaseRepository;

/**
 * Class PaymentRepository
 * @package App\Repositories
 * @version December 31, 2019, 11:14 am UTC
*/

class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pay_regNumber',
        'pay_regDate',
        'pay_name',
        'pay_address',
        'pay_admission',
        'pay_consultation',
        'pay_lab',
        'pay_others',
        'pay_subtotal',
        'pay_vat',
        'pay_total'
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
        return Payment::class;
    }
}
