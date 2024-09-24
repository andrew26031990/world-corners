<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function location(string $slug, string $location)
    {
        $locationSlug = '/'.$slug.'/'.$location;
        $location = Location::whereSlug($locationSlug)->firstOrFail();

        $comments = $location->comments;

        if(Str::contains($locationSlug, 'cities')){
            return view('pages.main.city', compact('location', 'comments'));
        }

        if(Str::contains($locationSlug, 'oceans')){
            return view('pages.main.oceans', compact('location', 'comments'));
        }

        if(Str::contains($locationSlug, 'seas')){
            return view('pages.main.seas', compact('location', 'comments'));
        }

        return view('pages.main.location', compact('location', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function locations(string $slug)
    {
        $slug = '/'.$slug;
        $menu = Menu::whereSlug($slug)->first();
        $childs = Menu::whereParentId($menu->id)->get();

        if(count($childs) > 0){
            $locations = Location::whereIn('menu_id', $childs->pluck('id'))->inRandomOrder()->paginate(3);
        }else{
            $locations = $menu->locations()->paginate(3);
        }

        return view('pages.main.locations',compact('locations', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
