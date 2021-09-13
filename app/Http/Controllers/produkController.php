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
    public function shop()
    {
        $data = produk::with('User','jenis_produk')->get();
        $user = User::with('level')->get();
        $link = 'produk';
        $jenis_produk = jenis_produk::get();
        return view('shop', compact('data','user','jenis_produk','link'));
    }
    
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
            'nama_produk' => ['required'],
            'stok' => ['required'],
            'harga' => ['required'],
            'id_penjual' => ['required'],
            'gambar' => ['required'],
            'rekening' => ['required'],
        ]);
        $image = $request->file('gambar');
        // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
        $image_name = $request->file('gambar')->store('img','public');
        $produk = produk::create([
            'nama_produk'     => $request->nama_produk,
            'stok'     => $request->stok,
            'harga'     => $request->harga,
            'gambar'     => $image_name,
            'id_penjual'     => $request->id_penjual,
            'rekening'     => $request->rekening,
        ]);
        return redirect('/admin/produk')-> with('success', 'produk Berhasil Ditambahkan');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => ['required'],
            'stok' => ['required'],
            'harga' => ['required'],
            'gambar' => ['required'],
            'rekening' => ['required'],
        ]);
        $image = $request->file('gambar');
        // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
        $image_name = $request->file('gambar')->store('img','public');
        $produk = produk::create([
            'nama_produk'     => $request->nama_produk,
            'stok'     => $request->stok,
            'harga'     => $request->harga,
            'gambar'     => $image_name,
            'id_penjual'     => Auth::User()->id,
            'rekening'     => $request->rekening,
        ]);
        return redirect('/admin/produk2')-> with('success', 'produk Berhasil Ditambahkan');
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
        $this->validate($request, [
            'nama_produk' => ['required'],
            'stok' => ['required'],
            'harga' => ['required'],
            'gambar' => ['required'],
            'rekening' => ['required'],
        ]);
        $image = $request->file('gambar');
        if($image == null){
            $data = produk::where('id',$id)->first();
            $data->nama_produk = $request->get('nama_produk');
            $data->stok = $request->get('stok');
            $data->harga = $request->get('harga');
            $data->rekening = $request->get('rekening');
            $data->save();
        }else{
            $produk = produk::where('id', $id)->first();
            if($produk->gambar && file_exists(storage_path('app/public/' , $produk->gambar))) {
                Storage::delete('public/' . $produk->gambar);
            }
            $image_name = $request->file('gambar')->store('img','public');
            $data = produk::where('id',$id)->with('kategori_produk')->first();
            $data->gambar = $image_name;
            $data->nama_produk = $request->get('nama_produk');
            $data->stok = $request->get('stok');
            $data->harga = $request->get('harga');
            $data->rekening = $request->get('rekening');
            $data->save();
        }
        if(Auth::User()->id_level == 1 ){
            return redirect('/admin/produk') -> with('success', 'Produk Berhasil Diperbaruui');
        }
        
        elseif (Auth::User()->id_level == 2){
            return redirect('/admin/produk2')-> with('success', 'Produk Berhasil Diperbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produk::find($id)->delete();
        if(Auth::User()->id_level == 1 ){
            return redirect('/admin/produk') -> with('success', 'Produk Berhasil Dihapus');
        }
        
        elseif (Auth::User()->id_level == 2){
            return redirect('/admin/produk2')-> with('success', 'Produk Berhasil Dihapus');
        }
    }
}
