<?php

use App\Http\Controllers\Pages\CommentController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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

Route::get('random-url', function (){
    $location = DB::table('locations')->inRandomOrder()->first();
    return response()->json([
        'url' => config('app.url').$location->slug
    ]);
});

Route::get('random-title', function (){
    $location = DB::table('locations')->inRandomOrder()->first();
    return response()->json([
        'title' => $location->title,
        'cutted-title' => explode(":", $location->title)[0]
    ]);
});

Route::get('/search-locations/{search}', function ($search){
    $locations = DB::table('locations')->where('title', 'like', "%".$search."%" ?? '')->orWhere('text', 'like', '%' . $search . '%')->get(['title', 'slug']);

    return response()->json([
        'locations' => $locations
    ]);
});

Route::post('/save-comment', [CommentController::class, 'store']);
Route::post('/subscribe', [SubscriptionController::class, 'subscribe']);
