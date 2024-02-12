<?php

use App\Http\Controllers\CctvController;
use App\Http\Controllers\DbClassController;
use App\Http\Controllers\DbStudentController;
use App\Http\Controllers\DbTeacherController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WifiController;
use App\Models\DbTeacher;
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
Route::get('/error', [App\Http\Controllers\HomeController::class, 'error'])->name('router.error');

Route::get('/hotspot', [App\Http\Controllers\HotspotController::class, 'index'])->name('hotspot.index');
Route::get('/hotspot/user', [App\Http\Controllers\HotspotController::class, 'user'])->name('hotspot.user');

Route::get('/setup', [App\Http\Controllers\SetupController::class, 'index'])->middleware('auth')->name('setup.index');
Route::get('/setup/api', [App\Http\Controllers\SetupApiController::class, 'api'])->middleware('auth')->name('setup.api');
Route::post('/setup/api', [App\Http\Controllers\SetupApiController::class, 'store'])->middleware('auth')->name('setup.api.store');
Route::delete('/setup/api', [App\Http\Controllers\SetupApiController::class, 'reset'])->middleware('auth')->name('setup.api.reset');

Route::get('/setup/hs', [App\Http\Controllers\SetupController::class, 'hs'])->middleware('auth')->name('setup.hs');
Route::get('/setup/userman', [App\Http\Controllers\SetupController::class, 'userman'])->middleware('auth')->name('setup.userman');

Route::get('/class', [DbClassController::class, 'index'])->name('db_class.index');
Route::get('/students', [DbStudentController::class, 'index'])->name('students.index');
Route::post('/student-import', [DbStudentController::class, 'fileImport'])->name('students.import');

Route::get('/teachers', [DbTeacherController::class, 'index'])->name('teachers.index');
Route::post('/teacher-import', [DbTeacherController::class, 'fileImport'])->name('teachers.import');
