<?php

namespace App\Providers;

use App\Models\Location;
use App\Models\Menu;
use App\Observers\LocationObserver;
use App\Observers\MenuObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Menu::observe(MenuObserver::class);
        Location::observe(LocationObserver::class);
    }
}
