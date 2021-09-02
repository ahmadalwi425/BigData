<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\jenis_produk;

class produkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produk::with('User','jenis_produk')->get();
        $user = User::with('level')->get();
        $link = 'produk';
        $jenis_produk = jenis_produk::get();
        return view('admin.produk', compact('data','user','jenis_produk','link'));
    }

    public function index2()
    {
        $data = produk::with('User','jenis_produk')->where('id_penjual',Auth::User()->id)->get();
        $user = User::with('level')->get();
        $link = 'produk';
        $jenis_produk = jenis_produk::get();
        return view('admin.produk', compact('data','user','jenis_produk','link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_jenis produk' => ['required'],
            'nama_produk' => ['required'],
            'stok' => ['required'],
            'harga' => ['required'],
            'gambar' => ['required'],
            'stok' => ['required'],
            'stok' => ['required'],
        ]);
        $ormawa = ormawa::create([
            'nama_ormawa'     => $request->nama_ormawa,
            'id_jurusan'     => $request->id_jurusan,
        ]);
        return redirect('/admin/ormawa')-> with('success', 'Ormawa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
