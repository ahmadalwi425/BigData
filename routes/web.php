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
Route::get('/admin/buletin/destroy/{id}', [App\Http\Controllers\buletinController::class,'destroy']); 
Route::put('/admin/buletin/update/{id}', [App\Http\Controllers\buletinController::class,'update']); 

Route::get('/admin/data_kampus',[App\Http\Controllers\data_kampusController::class, 'index']);
Route::get('/admin/data_kampus/destroy/{id}', [App\Http\Controllers\data_kampusController::class,'destroy']); 
Route::put('/admin/data_kampus/update/{id}', [App\Http\Controllers\data_kampusController::class,'update']);

Route::get('/admin/divisi',  [App\Http\Controllers\divisiController::class, 'index']);
Route::get('/admin/divisi/destroy/{id}', [App\Http\Controllers\divisiController::class,'destroy']); 
Route::put('/admin/divisi/update/{id}', [App\Http\Controllers\divisiController::class,'update']); 

Route::get('/admin/jurusan',  [App\Http\Controllers\jurusanController::class, 'index']);
Route::get('/admin/jurusan/destroy/{id}', [App\Http\Controllers\jurusanController::class,'destroy']); 
Route::put('/admin/jurusan/update/{id}', [App\Http\Controllers\jurusanController::class,'update']); 

Route::get('/admin/kalender',  [App\Http\Controllers\kal_akademikController::class, 'index2']);
Route::get('/admin/kalender/destroy/{id}', [App\Http\Controllers\kal_akademikController::class,'destroy']); 
Route::put('/admin/kalender/update/{id}', [App\Http\Controllers\kal_akademikController::class,'update']); 

Route::get('/admin/peminjaman',  [App\Http\Controllers\peminjamanController::class, 'index']);
Route::get('/admin/peminjaman/destroy/{id}', [App\Http\Controllers\peminjamanController::class,'destroy']); 
Route::put('/admin/peminjaman/update/{id}', [App\Http\Controllers\peminjamanController::class,'update']); 

Route::get('/admin/ormawa',  [App\Http\Controllers\ormawaController::class, 'index']);
Route::get('/admin/ormawa/destroy/{id}', [App\Http\Controllers\ormawaController::class,'destroy']); 
Route::put('/admin/ormawa/update/{id}', [App\Http\Controllers\ormawaController::class,'update']); 
