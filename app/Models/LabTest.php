<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LabTest
 * @package App\Models
 * @version December 31, 2019, 10:48 am UTC
 *
 * @property string lt_name
 * @property string lt_cost
 */
class LabTest extends Model
{
    use SoftDeletes;

    public $table = 'lab_tests';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lt_name',
        'lt_cost'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lt_name' => 'string',
        'lt_cost' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lt_name' => 'required',
        'lt_cost' => 'required'
    ];

    
}
