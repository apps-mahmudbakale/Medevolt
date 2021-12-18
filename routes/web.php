<?php

use App\Http\Controllers\ApplicationController;
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
})->name('welcome');

Route::get('latest-roles', function () {
    return view('careers.latest-roles');
})->name('latest-roles');

Route::get('medevolt-doctors', function () {
    return view('careers.doctors');
})->name('doctors');


Route::get('medevolt-nursing', function () {
    return view('careers.nursing');
})->name('nursing');

Route::get('medevolt-allied-health', function () {
    return view('careers.allied-health');
})->name('allied-health');


Route::get('medevolt-experiene', function () {
    return view('solutions.experience');
})->name('experience');

Route::get('medevolt-direct', function () {
    return view('solutions.direct');
})->name('direct');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register-now', [ApplicationController::class, 'index'])->name('register-now');
Route::post('/register-now', [ApplicationController::class, 'store'])->name('register.store');
