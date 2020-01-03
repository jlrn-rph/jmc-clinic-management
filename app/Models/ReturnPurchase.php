<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ReturnPurchase
 * @package App\Models
 * @version December 31, 2019, 1:55 pm UTC
 *
 * @property string ret_date
 * @property string ret_billNum
 * @property string ret_item
 * @property string ret_quantity
 * @property string ret_supplier
 * @property string ret_price
 */
class ReturnPurchase extends Model
{
    use SoftDeletes;

    public $table = 'return_purchases';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ret_date',
        'ret_billNum',
        'ret_item',
        'ret_quantity',
        'ret_supplier',
        'ret_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ret_date' => 'date',
        'ret_billNum' => 'string',
        'ret_item' => 'string',
        'ret_quantity' => 'string',
        'ret_supplier' => 'string',
        'ret_price' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ret_date' => 'required',
        'ret_billNum' => 'required',
        'ret_item' => 'required',
        'ret_quantity' => 'required',
        'ret_supplier' => 'required',
        'ret_price' => 'required'
    ];

    
}
