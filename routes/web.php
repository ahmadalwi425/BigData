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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', function () {
    $link = 'about';
    return view('about', compact('link'));
});
Route::get('/bigdata',  [App\Http\Controllers\bigdataController::class, 'index']);
Route::get('/buletin',  [App\Http\Controllers\buletinController::class, 'index']);
Route::get('/findus', function () {
    $link = 'findus';
    return view('findus', compact('link'));
});

Route::get('/calender', function () {
    $link = 'calender';
    return view('calender', compact('link'));
});
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/register2',  [App\Http\Controllers\Auth\RegisterController::class, 'tampilform']);

