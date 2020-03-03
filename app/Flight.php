<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TracksCreatorAndUpdater;

class Flight extends Model
{
    use TracksCreatorAndUpdater;

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

    public function from()
    {
        return $this->belongsTo('App\Airport', 'from_id');
    }

    public function to()
    {
        return $this->belongsTo('App\Airport', 'to_id');
    }
}
