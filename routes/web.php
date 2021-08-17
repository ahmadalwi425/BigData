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

Route::get('/calender', [App\Http\Controllers\kal_akademikController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/register2',  [App\Http\Controllers\Auth\RegisterController::class, 'tampilform']);

// ADMIN
Route::get('/admin', function () {
    $link = 'dashboard';
    return view('admin.dashboard', compact('link'));
});
Route::get('/admin/user', [App\Http\Controllers\userController::class,'index']); 

Route::get('/admin/buletin',  [App\Http\Controllers\buletinController::class, 'index2']);

Route::get('/admin/ormawa', function () {
    $link = 'ormawa';
    return view('admin.ormawa', compact('link'));
});
Route::get('/admin/data_kampus',[App\Http\Controllers\data_kampusController::class, 'index']);
Route::get('/admin/divisi', function () {
    $link = 'divisi';
    return view('admin.divisi', compact('link'));
});
Route::get('/admin/jurusan', function () {
    $link = 'jurusan';
    return view('admin.jurusan', compact('link'));
});
Route::get('/admin/kalender', function () {
    $link = 'kalender';
    return view('admin.kalender', compact('link'));
});
Route::get('/admin/peminjaman', function () {
    $link = 'peminjaman';
    return view('admin.peminjaman', compact('link'));
});
Route::get('/buletin/edit/{id}', [App\Http\Controllers\buletinController::class,'edit']); 
Route::get('/buletin/destroy/{id}', [App\Http\Controllers\buletinController::class,'destroy']); 
Route::put('/buletin/update/{id}', [App\Http\Controllers\buletinController::class,'update']); 
