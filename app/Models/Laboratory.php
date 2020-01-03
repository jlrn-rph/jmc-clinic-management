<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Laboratory
 * @package App\Models
 * @version December 31, 2019, 9:51 am UTC
 *
 * @property string lab_regNumber
 * @property string lab_regDate
 * @property string lab_name
 * @property string lab_address
 * @property string lab_dob
 * @property string lab_gender
 * @property string lab_contact
 * @property string lab_email
 * @property string lab_doctor
 * @property string lab_test
 * @property integer lab_status
 */
class Laboratory extends Model
{
    use SoftDeletes;

    public $table = 'laboratories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lab_regNumber',
        'lab_regDate',
        'lab_name',
        'lab_address',
        'lab_dob',
        'lab_gender',
        'lab_contact',
        'lab_email',
        'lab_doctor',
        'lab_test',
        'lab_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lab_regNumber' => 'string',
        'lab_regDate' => 'date',
        'lab_name' => 'string',
        'lab_address' => 'string',
        'lab_dob' => 'date',
        'lab_gender' => 'string',
        'lab_contact' => 'string',
        'lab_email' => 'string',
        'lab_doctor' => 'string',
        'lab_test' => 'string',
        'lab_status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lab_regNumber' => 'required',
        'lab_regDate' => 'required',
        'lab_name' => 'required',
        'lab_address' => 'required',
        'lab_dob' => 'required',
        'lab_gender' => 'required',
        'lab_contact' => 'required',
        'lab_email' => 'required',
        'lab_doctor' => 'required',
        'lab_test' => 'required',
        'lab_status' => 'required'
    ];

    
}
