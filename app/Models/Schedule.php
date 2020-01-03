<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Schedule
 * @package App\Models
 * @version December 31, 2019, 8:29 am UTC
 *
 * @property string sched_doctor
 * @property string sched_day
 * @property time sched_fromTime
 * @property time sched_toTime
 */
class Schedule extends Model
{
    use SoftDeletes;

    public $table = 'schedules';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sched_doctor',
        'sched_day',
        'sched_fromTime',
        'sched_toTime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sched_doctor' => 'string',
        'sched_day' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sched_doctor' => 'required',
        'sched_day' => 'required',
        'sched_fromTime' => 'required',
        'sched_toTime' => 'required'
    ];

    
}
