<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Supplier
 * @package App\Models
 * @version December 31, 2019, 1:05 pm UTC
 *
 * @property string sup_name
 * @property string sup_address
 * @property string sup_contact
 * @property string sup_email
 */
class Supplier extends Model
{
    use SoftDeletes;

    public $table = 'suppliers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sup_name',
        'sup_address',
        'sup_contact',
        'sup_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sup_name' => 'string',
        'sup_address' => 'string',
        'sup_contact' => 'string',
        'sup_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sup_name' => 'required',
        'sup_address' => 'required',
        'sup_contact' => 'required',
        'sup_email' => 'required'
    ];

    
}
