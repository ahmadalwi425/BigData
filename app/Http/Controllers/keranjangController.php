<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keranjang;
use Illuminate\Support\Facades\Auth;

class keranjangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *x
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = keranjang::with('User','produk')->where('id_user',Auth::User()->id)->get();
        return view('cart', compact('data'));
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
        $data = keranjang::where('id_user',Auth::User()->id)->where('id_produk',$id)->get();
        $data2 = keranjang::where('id_user',Auth::User()->id)->where('id_produk',$id)->first();
        $ck = count($data);
        if($ck == 0){
            $keranjang = keranjang::create([
                'id_user'     => Auth::User()->id,
                'id_produk' => $id,
                'qty' => 1,
            ]);
            return redirect('/pembelian')-> with('success', 'Keranjang Berhasil Ditambahkan');
        } else {
            $now = $data2->qty;
            $now += 1;
            $data2->qty = $now;
            $data2->save();
            return redirect('/keranjang');
        }
        
    }
    public function kurangkeranjang($id)
    {
        $data2 = keranjang::where('id_user',Auth::User()->id)->where('id_produk',$id)->first();
        if($data2->qty == 1){
            $data2->delete();
            return redirect('/keranjang');
        } else {
            $now = $data2->qty;
            $now -= 1;
            $data2->qty = $now;
            $data2->save();
            return redirect('/keranjang');
        }
        
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
        keranjang::find($id)->delete();
        return redirect('/keranjang')
        -> with('success', 'keranjang Successfully Deleted');
    }
}
