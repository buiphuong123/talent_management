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
    Route::get('/delete/{scheduleId}', [App\Http\Controllers\ScheduleController::class, 'delete'])->name('delete');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-schedule', [App\Http\Controllers\ScheduleController::class, 'add'])->name('add');
Route::get('/edit-schedule', [App\Http\Controllers\ScheduleController::class, 'edit'])->name('edit');
Route::get('/add-talent', [App\Http\Controllers\TalentController::class, 'add'])->name('add');
Route::get('/edit-talent', [App\Http\Controllers\TalentController::class, 'editTalent'])->name('edit');
