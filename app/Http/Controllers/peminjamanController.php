<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
use App\Models\User;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = peminjaman::with('user')->get();
        $user = User::get();
        $link = 'peminjaman';
        return view('admin.peminjaman', compact('data','user','link'));
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
            'id_user' => ['required'],
            'tgl_pinjam'  => ['required'],
            'tgl_kembali' => ['required'],
            'status' => ['required'],
            'barang' => ['required'],
        ]);
        $peminjaman = peminjaman::create([
            'id_user'     => $request->id_user,
            'tgl_pinjam'     => $request->tgl_pinjam,
            'tgl_kembali'     => $request->tgl_kembali,
            'status'     => 'dipinjam',
            'barang'     => $request->barang,
        ]);
        return redirect('/admin/peminjaman')-> with('success', 'peminjaman Successfully created');
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
            'id_user' => ['required'],
            'tgl_pinjam'  => ['required'],
            'tgl_kembali' => ['required'],
            'status' => ['required'],
            'barang' => ['required'],
        ]);
        $data = peminjaman::where('id',$id)->first();
        $data->tgl_pinjam = $request->get('tgl_pinjam');
        $data->tgl_kembali = $request->get('tgl_kembali');
        $data->status = $request->get('status');
        $data->barang = $request->get('barang');
        $data->id_user = $request->get('id_user');
        $data->save();
        return redirect('/admin/peminjaman')-> with('success', 'peminjaman Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        peminjaman::find($id)->delete();
        return redirect('/admin/peminjaman')
        -> with('success', 'peminjaman Successfully Deleted');
    }
}
