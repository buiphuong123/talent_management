<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('schedule')->name('schedule.')->group(function () {
    Route::get('/{option}', [App\Http\Controllers\ScheduleController::class, 'index'])->name('index');
    Route::get('/{scheduleId}/{userId}', [App\Http\Controllers\ScheduleController::class, 'show'])->name('show');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('talent', [\App\Http\Controllers\TalentController::class, 'index'])->name('talent');
Route::get('/talent/{talent}', [\App\Http\Controllers\TalentController::class, 'show'])->name('talent.profile');