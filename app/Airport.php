<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
        'name',
    ];

    public function arriving()
    {
        return $this->hasMany('App\Flight', 'from_id');
    }

    public function departing()
    {
        return $this->hasMany('App\Flight', 'to_id');
    }
}
