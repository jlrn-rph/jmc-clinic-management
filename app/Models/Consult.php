<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consult
 * @package App\Models
 * @version December 30, 2019, 3:29 pm UTC
 *
 * @property string con_dateSxStart
 * @property string con_height
 * @property string con_weight
 * @property string con_bp
 * @property string con_symptom
 * @property string con_diagnosis
 */
class Consult extends Model
{
    use SoftDeletes;

    public $table = 'consults';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'con_dateSxStart',
        'patients_id',
        'con_height',
        'con_weight',
        'con_bp',
        'con_symptom',
        'con_diagnosis'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'con_dateSxStart' => 'date',
        'con_height' => 'string',
        'con_weight' => 'string',
        'con_bp' => 'string',
        'con_symptom' => 'string',
        'con_diagnosis' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'con_dateSxStart' => 'required',
        'con_symptom' => 'required',
        'con_diagnosis' => 'required'
    ];

    public function patient(){
      return $this->hasMany(App\Patient::class);
    }

}
