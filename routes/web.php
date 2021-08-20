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
Route::get('/admin/user/{id}', [App\Http\Controllers\userController::class,'show']); 
Route::get('/about', function () {
    $link = 'about';
    return view('about', compact('link'));
});
Route::get('/admin/userDetail', function () {
    $link = 'user';
    return view('admin.userDetail', compact('link'));
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
Route::get('/admin/subdivisi', function () {
    $link = 'divisi';
    return view('admin.subdivisi', compact('link'));
});



Route::get('/admin/user', [App\Http\Controllers\userController::class,'index']); 

Route::get('/admin/buletin',  [App\Http\Controllers\buletinController::class, 'index2']);
Route::post('/admin/buletin/create',  [App\Http\Controllers\buletinController::class, 'store']);
Route::get('/admin/buletin/destroy/{id}', [App\Http\Controllers\buletinController::class,'destroy']); 
Route::put('/admin/buletin/update/{id}', [App\Http\Controllers\buletinController::class,'update']); 

Route::post('/admin/kategori_buletin/store',  [App\Http\Controllers\kategori_buletinController::class, 'store']);
Route::get('/admin/kategori_buletin/destroy/{id}', [App\Http\Controllers\kategori_buletinController::class,'destroy']); 
Route::put('/admin/kategori_buletin/update/{id}', [App\Http\Controllers\kategori_buletinController::class,'update']);

Route::get('/admin/data_kampus',[App\Http\Controllers\data_kampusController::class, 'index']);
Route::post('/admin/data_kampus/store',  [App\Http\Controllers\data_kampusController::class, 'store']);
Route::get('/admin/data_kampus/destroy/{id}', [App\Http\Controllers\data_kampusController::class,'destroy']); 
Route::put('/admin/data_kampus/update/{id}', [App\Http\Controllers\data_kampusController::class,'update']);

Route::get('/admin/divisi',  [App\Http\Controllers\divisiController::class, 'index']);
Route::post('/admin/divisi/create',  [App\Http\Controllers\divisiController::class, 'store']);
Route::get('/admin/divisi/destroy/{id}', [App\Http\Controllers\divisiController::class,'destroy']); 
Route::put('/admin/divisi/update/{id}', [App\Http\Controllers\divisiController::class,'update']); 

Route::get('/admin/subdivisi/{id}',  [App\Http\Controllers\subdivisiController::class, 'index']);
Route::post('/admin/subdivisi/create',  [App\Http\Controllers\subdivisiController::class, 'store']);
Route::get('/admin/subdivisi/destroy/{id}', [App\Http\Controllers\subdivisiController::class,'destroy']); 
Route::put('/admin/subdivisi/update/{id}', [App\Http\Controllers\subdivisiController::class,'update']); 

Route::get('/admin/jurusan',  [App\Http\Controllers\jurusanController::class, 'index']);
Route::post('/admin/jurusan/create',  [App\Http\Controllers\jurusanController::class, 'store']);
Route::get('/admin/jurusan/destroy/{id}', [App\Http\Controllers\jurusanController::class,'destroy']); 
Route::put('/admin/jurusan/update/{id}', [App\Http\Controllers\jurusanController::class,'update']); 

Route::get('/admin/kalender',  [App\Http\Controllers\kal_akademikController::class, 'index2']);
Route::post('/admin/kalender/create',  [App\Http\Controllers\kal_akademikController::class, 'store']);
Route::get('/admin/kalender/destroy/{id}', [App\Http\Controllers\kal_akademikController::class,'destroy']); 
Route::put('/admin/kalender/update/{id}', [App\Http\Controllers\kal_akademikController::class,'update']); 

Route::get('/admin/peminjaman',  [App\Http\Controllers\peminjamanController::class, 'index']);
Route::post('/admin/peminjaman/create',  [App\Http\Controllers\peminjamanController::class, 'store']);
Route::get('/admin/peminjaman/destroy/{id}', [App\Http\Controllers\peminjamanController::class,'destroy']); 
Route::put('/admin/peminjaman/update/{id}', [App\Http\Controllers\peminjamanController::class,'update']); 
Route::get('/admin/peminjaman/edit/{id}', [App\Http\Controllers\peminjamanController::class,'edit']); 

Route::get('/admin/ormawa',  [App\Http\Controllers\ormawaController::class, 'index']);
Route::post('/admin/ormawa/create',  [App\Http\Controllers\ormawaController::class, 'store']);
Route::get('/admin/ormawa/destroy/{id}', [App\Http\Controllers\ormawaController::class,'destroy']); 
Route::get('/admin/ormawa/{id}', [App\Http\Controllers\daftar_ormawaController::class,'show']); 
Route::put('/admin/ormawa/update/{id}', [App\Http\Controllers\ormawaController::class,'update']); 
