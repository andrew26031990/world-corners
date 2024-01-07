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
Route::get('/gallery', [MainController::class, 'about']); //Get to about page
Route::get('/contacts', [MainController::class, 'about']); //Get to about page
Route::get('/{slug}', [LocationController::class, 'location']);
//Admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('menus', App\Http\Controllers\MenuController::class)->middleware('auth');
Route::resource('locations', App\Http\Controllers\LocationController::class)->middleware('auth');
