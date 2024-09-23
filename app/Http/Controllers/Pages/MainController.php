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
        $locations = Location::query()->orderByDesc('created_at')->paginate(3);
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
        return view('pages.main.contacts');
    }

    public function privacyAndPolicy()
    {
        return view('pages.main.privacy-policy');
    }
}
