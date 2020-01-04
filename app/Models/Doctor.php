<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version December 30, 2019, 4:19 pm UTC
 *
 * @property string dr_regNum
 * @property string dr_regDate
 * @property string dr_image
 * @property string dr_specialist
 * @property string dr_license
 * @property string dr_name
 * @property string dr_gender
 * @property string dr_dob
 * @property string dr_address
 * @property string dr_contact
 * @property string dr_email
 * @property string dr_fee
 * @property time dr_timeIn
 * @property time dr_timeOut
 * @property string dr_daysAvail
 * @property integer dr_status
 */
class Doctor extends Model
{
    use SoftDeletes;

    public $table = 'doctors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dr_regNum',
        'dr_regDate',
        'dr_image',
        'dr_specialist',
        'dr_license',
        'dr_name',
        'dr_gender',
        'dr_dob',
        'dr_address',
        'dr_contact',
        'dr_email',
        'dr_fee',
        'dr_timeIn',
        'dr_timeOut',
        'dr_daysAvail',
        'dr_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dr_regNum' => 'string',
        'dr_regDate' => 'date',
        'dr_image' => 'string',
        'dr_specialist' => 'string',
        'dr_license' => 'string',
        'dr_name' => 'string',
        'dr_gender' => 'string',
        'dr_dob' => 'date',
        'dr_address' => 'string',
        'dr_contact' => 'string',
        'dr_email' => 'string',
        'dr_fee' => 'string',
        'dr_daysAvail' => 'string',
        'dr_status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dr_regNum' => 'required',
        'dr_regDate' => 'required',
        'dr_specialist' => 'required',
        'dr_license' => 'required',
        'dr_name' => 'required',
        'dr_gender' => 'required',
        'dr_dob' => 'required',
        'dr_address' => 'required',
        'dr_contact' => 'required',
        'dr_email' => 'required',
        'dr_fee' => 'required',
        'dr_timeIn' => 'required',
        'dr_timeOut' => 'required',
        'dr_daysAvail' => 'required',
        'dr_status' => 'required'
    ];

    public function patient(){
      return $this->hasMany(App\Patient::class);
    }
    
}
