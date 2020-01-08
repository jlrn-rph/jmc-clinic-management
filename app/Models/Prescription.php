<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prescription
 * @package App\Models
 * @version December 30, 2019, 4:24 pm UTC
 *
 * @property string rx_generic
 * @property string rx_brand
 * @property string rx_freq
 * @property string rx_days
 * @property string rx_instruct
 */
class Prescription extends Model
{
    use SoftDeletes;

    public $table = 'prescriptions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'rx_generic',
        'px_name',
        'rx_brand',
        'rx_freq',
        'rx_days',
        'rx_instruct'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'px_name'  => 'string',
        'rx_generic' => 'string',
        'rx_brand' => 'string',
        'rx_freq' => 'string',
        'rx_days' => 'string',
        'rx_instruct' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
