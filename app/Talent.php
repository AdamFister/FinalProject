<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $fillable = [
        'profile_id', 'instrument_id'
    ];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function instrument()
    {
        return $this->belongsTo('App\Instrument');
    }
}
