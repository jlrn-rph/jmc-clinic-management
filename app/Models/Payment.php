<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version December 31, 2019, 11:14 am UTC
 *
 * @property string pay_regNumber
 * @property string pay_regDate
 * @property string pay_name
 * @property string pay_address
 * @property string pay_admission
 * @property string pay_consultation
 * @property string pay_lab
 * @property string pay_others
 * @property string pay_subtotal
 * @property string pay_vat
 * @property string pay_total
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pay_regNumber' => 'string',
        'pay_regDate' => 'date',
        'pay_name' => 'string',
        'pay_address' => 'string',
        'pay_admission' => 'string',
        'pay_consultation' => 'string',
        'pay_lab' => 'string',
        'pay_others' => 'string',
        'pay_subtotal' => 'string',
        'pay_vat' => 'string',
        'pay_total' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pay_regNumber' => 'required',
        'pay_regDate' => 'required',
        'pay_name' => 'required',
        'pay_subtotal' => 'required',
        'pay_vat' => 'required',
        'pay_total' => 'required'
    ];

    
}
