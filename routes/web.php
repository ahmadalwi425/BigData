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
Route::get('/login', function() {
    return view('login');
});
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
Route::get('/shop', function () {
    $link = 'shop';
    return view('shop', compact('link'));
});

Route::get('/calender', [App\Http\Controllers\kal_akademikController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/registerUser',  [App\Http\Controllers\Auth\RegisterController::class, 'tampilform']);

// ADMIN
Route::get('/admin', [App\Http\Controllers\daftar_ormawaController::class,'index']); 
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

Route::get('/admin/submenu/add/{id}',  [App\Http\Controllers\submenuController::class, 'add']);
Route::get('/admin/submenu/{id}',  [App\Http\Controllers\submenuController::class, 'index']);
Route::post('/admin/submenu/create',  [App\Http\Controllers\submenuController::class, 'store']);
Route::get('/admin/submenu/destroy/{id}', [App\Http\Controllers\submenuController::class,'destroy']); 
Route::put('/admin/submenu/update/{id}', [App\Http\Controllers\submenuController::class,'update']); 

Route::get('/admin/jurusan',  [App\Http\Controllers\jurusanController::class, 'index']);
Route::post('/admin/jurusan/create',  [App\Http\Controllers\jurusanController::class, 'store']);
Route::get('/admin/jurusan/destroy/{id}', [App\Http\Controllers\jurusanController::class,'destroy']); 
Route::put('/admin/jurusan/update/{id}', [App\Http\Controllers\jurusanController::class,'update']); 

Route::get('/admin/kalender',  [App\Http\Controllers\kal_akademikController::class, 'index2']);
Route::post('/admin/kalender/create',  [App\Http\Controllers\kal_akademikController::class, 'store']);
Route::get('/admin/kalender/destroy/{id}', [App\Http\Controllers\kal_akademikController::class,'destroy']); 
Route::put('/admin/kalender/update/{id}', [App\Http\Controllers\kal_akademikController::class,'update']); 
Route::get('/admin/jenis_kal/destroy/{id}', [App\Http\Controllers\jenis_kalController::class,'destroy']); 
Route::post('/admin/jenis_kal/create',  [App\Http\Controllers\jenis_kalController::class, 'store']);

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

Route::get('/admin/produk',  [App\Http\Controllers\produkController::class, 'index']);
Route::get('/admin/produk/{id}',  [App\Http\Controllers\produkController::class, 'detail']);
Route::get('/admin/produk2',  [App\Http\Controllers\produkController::class, 'index2']);
Route::post('/admin/produk/create',  [App\Http\Controllers\produkController::class, 'store']);
Route::get('/admin/produk/destroy/{id}', [App\Http\Controllers\produkController::class,'destroy']); 
Route::put('/admin/produk/update/{id}', [App\Http\Controllers\produkController::class,'update']); 
Route::put('/admin/produk/updatestok/{id}', [App\Http\Controllers\produkController::class,'updatestok']); 

Route::get('/admin/daftar_ormawa/destroy/{id}', [App\Http\Controllers\daftar_ormawaController::class,'destroy']); 
Route::post('/admin/daftar_ormawa/create',  [App\Http\Controllers\daftar_ormawaController::class, 'store']);

Route::get('/admin/tahun_ajar/destroy/{id}', [App\Http\Controllers\tahun_ajarController::class,'destroy']); 
Route::post('/admin/tahun_ajar/create',  [App\Http\Controllers\tahun_ajarController::class, 'store']);

Route::get('/pembelian',  [App\Http\Controllers\produkController::class, 'shop']);
Route::get('/keranjang',  [App\Http\Controllers\keranjangController::class, 'index']);
Route::post('/keranjang/create/{id}',  [App\Http\Controllers\keranjangController::class, 'store']);
Route::post('/pembelian/store',  [App\Http\Controllers\pembelianController::class, 'store']);
Route::post('/pembelian/konfirmasibukti',  [App\Http\Controllers\pembelianController::class, 'konfirmasibukti']);
Route::get('/pembelian/konfirmasikirim',  [App\Http\Controllers\pembelianController::class, 'konfirmasikirim']);
