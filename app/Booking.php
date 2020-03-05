<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Traits\TracksCreatorAndUpdater;

class Booking extends Pivot
{
    use TracksCreatorAndUpdater;

    public function passenger()
    {
        return $this->belongsTo('App\Passenger', 'passenger_id');
    }

    public function flight()
    {
        return $this->belongsTo('App\Flight', 'flight_id');
    }

    public $incrementing = true;
}
