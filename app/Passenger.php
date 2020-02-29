<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        'cpf','surname','name','birthday','email','phone','created_by','updated_by'
    ];    


    public function flights()
    {
        return $this->belongsToMany('App\Flight','booking')
            ->using('App\Booking')
            ->withTimestamps()
            ->withPivot([
                'kind',
                'created_by',
                'updated_by',
            ]);
    }
}
