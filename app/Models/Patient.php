<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 * @package App\Models
 * @version December 30, 2019, 12:51 pm UTC
 *
 * @property string px_regNumber
 * @property string px_regDate
 * @property string px_image
 * @property string px_name
 * @property string px_address
 * @property string px_dob
 * @property string px_gender
 * @property string px_contact
 * @property string px_email
 * @property string px_doctor
 * @property integer px_status
 */
class Patient extends Model
{
    use SoftDeletes;

    public $table = 'patients';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'px_regNumber',
        'px_regDate',
        'px_image',
        'px_name',
        'px_address',
        'px_dob',
        'px_gender',
        'px_contact',
        'px_email',
        'px_doctor',
        'px_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'px_regNumber' => 'string',
        'px_regDate' => 'date',
        'px_image' => 'string',
        'px_name' => 'string',
        'px_address' => 'string',
        'px_dob' => 'date',
        'px_gender' => 'string',
        'px_contact' => 'string',
        'px_email' => 'string',
        'px_doctor' => 'string',
        'px_status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'px_regNumber' => 'required',
        'px_regDate' => 'required',
        'px_name' => 'required',
        'px_address' => 'required',
        'px_dob' => 'required',
        'px_gender' => 'required',
        'px_contact' => 'required',
        'px_email' => 'required',
        'px_doctor' => 'required',
        'px_status' => 'required'
    ];


    public function consult(){
      return $this->belongsTo(Consult::class);
    }

    public function doctor(){
      return $this->hasMany(Doctor::class);
    }

    public function payment(){
      return $this->hasMany(Payment::class);
    }

}
