<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function consult(){
      return $this->belongsTo(App\Consult::class);
    }
}
