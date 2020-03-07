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

    protected $appends = ['is_elderly'];

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

    public function setNameAttribute($value) {
        $this->attributes['name'] = strtoupper($value);
    }

    public function setSurnameAttribute($value) {
            $this->attributes['surname'] = strtoupper($value);
    }

    public function getIsElderlyAttribute()
    {
        return Carbon::now()->floatDiffInYears($this->attributes['birthday']) > 60;
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
