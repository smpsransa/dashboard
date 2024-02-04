<?php

use App\Http\Controllers\CctvController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WifiController;
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

// Route::get('/cctv', function () {
//     return view('cctv');
// })->name('map');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('cctv', CctvController::class);
Route::resource('wifi', WifiController::class);
Route::resource('service', ServiceController::class);

Route::get('/hotspot', [App\Http\Controllers\HotspotController::class, 'index'])->name('hotspot.index');
Route::get('/hotspot/user', [App\Http\Controllers\HotspotController::class, 'hotspotUser'])->name('hotspot.user');

Route::get('/hotspot/setup', [App\Http\Controllers\HotspotController::class, 'hotspotSetup'])->middleware('auth')->name('hotspot.setup');
