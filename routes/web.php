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
    $link = 'home';
    return redirect('/home');
});

Route::get('/about', function () {
    $link = 'about';
    return view('about', compact('link'));
});

Route::get('/bigdata', function () {
    $link = 'bigdata';
    return view('bigdata', compact('link'));
});

Route::get('/buletin', function () {
    $link = 'buletin';
    return view('buletin', compact('link'));
});

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
