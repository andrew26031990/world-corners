<?php

namespace App\Observers;

use App\Models\Menu;
use Illuminate\Support\Str;

class MenuObserver
{
    public function creating(Menu $menu): void
    {
        $menu->slug = Str::slug($menu->name);
    }

    public function updating(Menu $menu): void
    {
        $menu->slug = Str::slug($menu->name);
    }
}
