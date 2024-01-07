<?php

namespace App\Observers;

use App\Models\Location;
use Illuminate\Support\Str;

class LocationObserver
{
    public function creating(Location $location): void
    {
        $location->slug = Str::slug($location->title);
    }

    public function updating(Location $location): void
    {
        $location->slug = Str::slug($location->title);
    }
}
