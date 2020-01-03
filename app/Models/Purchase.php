<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Purchase
 * @package App\Models
 * @version December 31, 2019, 1:39 pm UTC
 *
 * @property string pur_date
 * @property string pur_billNum
 * @property string pur_item
 * @property string pur_quantity
 * @property string pur_supplier
 * @property string pur_price
 */
class Purchase extends Model
{
    use SoftDeletes;

    public $table = 'purchases';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pur_date',
        'pur_billNum',
        'pur_item',
        'pur_quantity',
        'pur_supplier',
        'pur_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pur_date' => 'date',
        'pur_billNum' => 'string',
        'pur_item' => 'string',
        'pur_quantity' => 'string',
        'pur_supplier' => 'string',
        'pur_price' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pur_date' => 'required',
        'pur_billNum' => 'required',
        'pur_item' => 'required',
        'pur_quantity' => 'required',
        'pur_supplier' => 'required',
        'pur_price' => 'required'
    ];

    
}
