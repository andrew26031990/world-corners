<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::orderByDesc('created_at')->limit(3)->get();
        return view('pages.main.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('pages.main.about');
    }

    public function gallery()
    {

    }

    public function contacts()
    {

    }
}
