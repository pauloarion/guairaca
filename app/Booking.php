<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Traits\TracksCreatorAndUpdater;

class Booking extends Pivot
{
    use TracksCreatorAndUpdater;

    public $incrementing = true;
}
