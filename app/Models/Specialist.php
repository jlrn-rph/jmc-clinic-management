<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Specialist
 * @package App\Models
 * @version December 29, 2019, 9:51 am UTC
 *
 * @property string sp_name
 */
class Specialist extends Model
{
    use SoftDeletes;

    public $table = 'specialists';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sp_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sp_id' => 'integer',
        'sp_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sp_name' => 'required'
    ];

    
}
