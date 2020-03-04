<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon as Carbon;
use App\Traits\TracksCreatorAndUpdater;

class Passenger extends Model
{
    use TracksCreatorAndUpdater;

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

    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = Carbon::createFromFormat(config('app.date_format'), $value)->format(config('app.date_format_db'));
    }

    public function getBirthdayAttribute()
    {
        return Carbon::parse($this->attributes['birthday'])->format(config('app.date_format'));
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birthday'])->age;
    }
}
