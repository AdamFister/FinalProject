<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $fillable = [
        'type'
    ];

    public function talent()
    {
        return $this->hasMany('App\Talent');
    }
}
