<?php

use App\Models\Location;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('getMenu')) {
    function getMenu(): Collection
    {
        $maxElements = 11;
        $parents= Menu::where('parent_id', null)->where('is_active', true)->get();
        $childs = Menu::whereNot('parent_id', null)->where('is_active', true)->inRandomOrder()->limit($maxElements - count($parents))->get();
        return $parents->merge($childs);
    }
}

if (!function_exists('getArticles')) {
    function getArticles(): Collection
    {
        return Location::inRandomOrder()->limit(12)->get();
    }
}
