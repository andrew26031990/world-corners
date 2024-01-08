<?php

use App\Http\Controllers\Pages\LocationController;
use App\Http\Controllers\Pages\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', [MainController::class, 'index']); //Get to main page
Route::get('/about', [MainController::class, 'about']); //Get to about page
Route::get('/gallery', [MainController::class, 'gallery']); //Get to about page
Route::get('/contacts', [MainController::class, 'contacts']); //Get to about page
Route::get('/{slug}', [LocationController::class, 'locations']);
Route::get('/{slug}/{location}', [LocationController::class, 'location']);
//Admin
Route::group(['prefix' => 'admin','middleware' => 'auth'],function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('menus', App\Http\Controllers\MenuController::class);
    Route::resource('locations', App\Http\Controllers\LocationController::class);
});

