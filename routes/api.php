<?php

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get_places', function (){
    $data = json_decode(Http::get('https://world-corners.ru/api/migrate_places')->body());
    foreach ($data as $item){
        Location::create([
            'menu_id' => $item->menu_id,
            'title' => $item->title,
            'keywords' => $item->keywords,
            'description' => $item->description,
            'text' => $item->text,
            'short_text' => $item->short_text,
            'latitude' => $item->latitude,
            'longitude' => $item->longitude,
        ]);
    }
    return 'Done';
});

Route::get('random-url', function (){
    $location = DB::table('locations')->inRandomOrder()->first();
    return response()->json([
        'url' => config('app.url').$location->slug
    ]);
});

Route::get('random-title', function (){
    $location = DB::table('locations')->inRandomOrder()->first();
    return response()->json([
        'title' => $location->title
    ]);
});
