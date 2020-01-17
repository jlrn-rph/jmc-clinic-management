<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Staff
 * @package App\Models
 * @version January 16, 2020, 7:55 pm UTC
 *
 * @property string stf_regNum
 * @property string stf_regDate
 * @property string stf_emType
 * @property string stf_department
 * @property string stf_image
 * @property string stf_name
 * @property string stf_gender
 * @property string stf_dob
 * @property string stf_Address
 * @property string stf_contact
 * @property string stf_email
 * @property string stf_status
 */
class Staff extends Model
{
    use SoftDeletes;

    public $table = 'staff';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'stf_regNum',
        'stf_regDate',
        'stf_emType',
        'stf_department',
        'stf_image',
        'stf_name',
        'stf_gender',
        'stf_dob',
        'stf_Address',
        'stf_contact',
        'stf_email',
        'stf_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'stf_regNum' => 'string',
        'stf_regDate' => 'date',
        'stf_emType' => 'string',
        'stf_department' => 'string',
        'stf_image' => 'string',
        'stf_name' => 'string',
        'stf_gender' => 'string',
        'stf_dob' => 'string',
        'stf_Address' => 'string',
        'stf_contact' => 'string',
        'stf_email' => 'string',
        'stf_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'stf_regNum' => 'required',
        'stf_regDate' => 'required',
        'stf_emType' => 'required',
        'stf_department' => 'required',
        'stf_name' => 'required',
        'stf_gender' => 'required',
        'stf_dob' => 'required',
        'stf_Address' => 'required',
        'stf_contact' => 'required',
        'stf_email' => 'required',
        'stf_status' => 'required'
    ];

    
}
