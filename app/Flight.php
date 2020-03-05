<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon as Carbon;
use App\Traits\TracksCreatorAndUpdater;

class Flight extends Model
{
    use TracksCreatorAndUpdater;

    protected $fillable = [
        'name','active','departure_time','airline','from_id','to_id','departure_date','duration'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function persons()
    {
        return $this->belongsToMany('App\Passenger','booking')
            ->using('App\Booking')
            ->withTimestamps()
            ->withPivot([
                'kind',
                'created_by',
                'updated_by',
            ]);
    }

    public function setDepartureDateAttribute($value)
    {
        $this->attributes['departure_date'] = Carbon::createFromFormat(config('app.date_format'), $value)->format(config('app.date_format_db'));
    }

    public function getDepartureDateAttribute()
    {
        return Carbon::parse($this->attributes['departure_date'])->format(config('app.date_format'));
    }

    public function from()
    {
        return $this->belongsTo('App\Airport', 'from_id');
    }

    public function to()
    {
        return $this->belongsTo('App\Airport', 'to_id');
    }
}
