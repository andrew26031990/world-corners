<?php

namespace App\Observers;

use App\Models\Location;
use App\Models\Menu;
use Illuminate\Support\Str;

class LocationObserver
{
    public function creating(Location $location): void
    {
        $menu = Menu::whereId($location->menu_id)->first();
        $location->slug = '/'.$menu->slug.'/'.Str::slug($location->title);
    }

    public function updating(Location $location): void
    {
        $menu = Menu::whereId($location->menu_id)->first();
        $location->slug = '/'.$menu->slug.'/'.Str::slug($location->title);
    }
}
