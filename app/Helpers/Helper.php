<?php

use App\Models\Location;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('getMenu')) {
    function getMenu(): Collection
    {
        return Menu::query()->whereNull('parent_id')->with('children')->get();
        /*$maxElements = 11;
        $parents= Menu::where('parent_id', null)->where('is_active', true)->get();
        $childs = Menu::whereNot('parent_id', null)->where('is_active', true)->inRandomOrder()->limit($maxElements - count($parents))->get();
        return $parents->merge($childs);*/
    }
}

if (!function_exists('getArticles')) {
    function getArticles(): Collection
    {
        return Location::query()->inRandomOrder()->limit(12)->get();
    }
}

if (!function_exists('getCategoriesArticlesCount')) {
    function getCategoriesArticlesCount(): Collection
    {
        return Menu::query()->whereIsActive(true)->withCount('locations')->get();
    }
}

if (!function_exists('devideLocationIntoTwoParts')) {
    function devideLocationIntoTwoParts($location): array
    {
        $textLength = mb_strlen($location->text, 'UTF-8');
        $halfLength = ceil($textLength / 2);
        $firstHalf = mb_substr($location->text, 0, $halfLength, 'UTF-8');
        $lastDotPosition = mb_strrpos($firstHalf, '.', 0, 'UTF-8');
        if ($lastDotPosition !== false) {
            $firstHalf = mb_substr($firstHalf, 1, $lastDotPosition, 'UTF-8');
            $secondHalf = mb_substr($location->text, $lastDotPosition + 1, $textLength - $lastDotPosition - 1, 'UTF-8');
            return [$firstHalf, $secondHalf];
        } else {
            $secondHalf = mb_substr($location->text, $halfLength, $textLength - $halfLength, 'UTF-8');
            return [$firstHalf, $secondHalf];
        }
    }
}

if (!function_exists('neighboringLocations')) {
    function neighboringLocations($location): array
    {
        $previousPost = Location::where('id', '<', $location->id)->orderBy('id', 'desc')->first();
        $nextPost = Location::where('id', '>', $location->id)->orderBy('id', 'asc')->first();

        return [$previousPost, $nextPost];
    }
}
