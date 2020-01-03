<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App\Models
 * @version December 31, 2019, 12:10 pm UTC
 *
 * @property string it_name
 * @property string it_inCount
 * @property string it_curCount
 */
class Item extends Model
{
    use SoftDeletes;

    public $table = 'items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'it_name',
        'it_inCount',
        'it_curCount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'it_name' => 'string',
        'it_inCount' => 'string',
        'it_curCount' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'it_name' => 'required',
        'it_inCount' => 'required',
        'it_curCount' => 'required'
    ];

    
}
