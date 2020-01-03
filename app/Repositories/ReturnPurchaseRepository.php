<?php

namespace App\Repositories;

use App\Models\ReturnPurchase;
use App\Repositories\BaseRepository;

/**
 * Class ReturnPurchaseRepository
 * @package App\Repositories
 * @version December 31, 2019, 1:55 pm UTC
*/

class ReturnPurchaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ret_date',
        'ret_billNum',
        'ret_item',
        'ret_quantity',
        'ret_supplier',
        'ret_price'
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
        return ReturnPurchase::class;
    }
}
