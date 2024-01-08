<?php

namespace App\Console\Commands;

use App\Models\Location;
use App\Models\Menu;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UpdateLocationSlugCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:location-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $locations = Location::all();
        foreach ($locations as $location){
            $menu = Menu::whereId($location->menu_id)->first();
            $location->slug = '/'.$menu->slug.'/'.Str::slug($location->title);
            $location->save();
        }
    }
}
