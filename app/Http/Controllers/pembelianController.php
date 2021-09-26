<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pembelian;
use App\Models\keranjang;
use App\Models\produk;
use Carbon\Carbon;

class pembelianController extends Controller
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
        $data = keranjang::with('User','produk')->get();
        $produk = produk::with('User','jenis_produk')->get();
        $pembelian = pembelian::with('User','produk')->where('id_pembeli',Auth::User()->id)->get();
        return view('konfirmasi', compact('data','produk','pembelian'));
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
    public function store($id)
    {
        $data2 = keranjang::with('User','produk')->where('id_user',Auth::User()->id)->where('id_produk',$id)->first();
        $harga2 = produk::where('id',$id)->first();
        $harga = $harga2->harga;
        // dd($data2);
        $pembelian = pembelian::create([
            'id_pembeli'     => Auth::User()->id,
            'id_produk'     => $id,
            'qty'     => $data2->qty,
            'total_harga' => ($data2->qty * $harga),
            'tanggal'     => Carbon::now(),
            'status'     => 'menunggu konfirmasi',
        ]);
        $data2->delete();
        return redirect('/konfirmasi');
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

    public function konfirmasibukti(Request $request, $id)
    {
        $image = $request->file('bukti');
        $image_name = $request->file('bukti')->store('img','public');
        $data = pembelian::where('id',$id)->first();
        $data->bukti = $image_name;
        $data->status ='menunggu pengiriman';
        $data->save();
        $tmpstok = $data->qty;
        $data2 = produk::where('id',$data->id_produk)->first();
        $newstok = $data2->stok - $data->qty;
        $data2 = $newstok;
        $data2->save();
        return redirect('konfirmasi');
    }
    public function konfirmasikirim(Request $request, $id)
    {
        $data = pembelian::where('id',$id)->first();
        $data->status ='Terkirim';
        $data->save();
        return redirect('konfirmasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pembelian::find($id)->delete();
        return redirect('/konfirmasi')
        -> with('success', 'CheckOut Successfully Deleted');
    }
}
