<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecruiteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('medevolt-public-sector', function () {
    return view('solutions.nhs');
})->name('public');

Route::get('medevolt-private-sector', function () {
    return view('solutions.private');
})->name('private');

Route::get('medevolt-virtual-register', function () {
    return view('solutions.virtual-register');
})->name('virtual-register');

Route::get('medevolt-virtual-hospital', function () {
    return view('solutions.virtual-hospital');
})->name('virtual-hospital');

Route::get('medevolt-upload-document', function () {
    return view('compliance.upload-documents');
})->name('upload-document');


Route::get('medevolt-useful-document', function () {
    return view('compliance.useful-documents');
})->name('useful-documents');


Route::get('medevolt-news', function () {
    return view('support.news');
})->name('news');


Route::get('medevolt-blog', function () {
    return view('support.blog');
})->name('blog');

Route::get('contact-us', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/register-now', [ApplicationController::class, 'index'])->name('register-now');
Route::post('/register-now', [ApplicationController::class, 'store'])->name('register.store');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('test', [UserController::class, 'test'])->name('test');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('recruites', RecruiteController::class);

});