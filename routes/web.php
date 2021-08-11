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
<<<<<<< HEAD
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
=======


Route::get('/', function () {
    $link = 'home';
    return redirect('/home');
});

>>>>>>> fd4fea32523c84a7d9eb1d9926bfec4c4c209f4a
Route::get('/about', function () {
    $link = 'about';
    return view('about', compact('link'));
});
<<<<<<< HEAD
Route::get('/bigdata',  [App\Http\Controllers\bigdataController::class, 'index']);
Route::get('/buletin',  [App\Http\Controllers\buletinController::class, 'index']);
=======

Route::get('/bigdata', function () {
    $link = 'bigdata';
    return view('bigdata', compact('link'));
});

Route::get('/buletin', function () {
    $link = 'buletin';
    return view('buletin', compact('link'));
});

>>>>>>> fd4fea32523c84a7d9eb1d9926bfec4c4c209f4a
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

