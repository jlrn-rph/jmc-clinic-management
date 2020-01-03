<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Appointment
 * @package App\Models
 * @version December 30, 2019, 2:08 pm UTC
 *
 * @property string ap_pxName
 * @property string ap_regDate
 * @property string ap_contact
 * @property string ap_doctor
 * @property string ap_specialist
 * @property string ap_reason
 * @property string ap_status
 */
class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'appointments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ap_pxName',
        'ap_regDate',
        'ap_contact',
        'ap_doctor',
        'ap_specialist',
        'ap_reason',
        'ap_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ap_pxName' => 'string',
        'ap_regDate' => 'date',
        'ap_contact' => 'string',
        'ap_doctor' => 'string',
        'ap_specialist' => 'string',
        'ap_reason' => 'string',
        'ap_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ap_pxName' => 'required',
        'ap_regDate' => 'required',
        'ap_contact' => 'required',
        'ap_reason' => 'required',
        'ap_status' => 'required'
    ];

    
}
