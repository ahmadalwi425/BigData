<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori_buletin;

class kategori_buletinController extends Controller
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
        //
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
            'nama_kategori'   => 'required', 
        ]);
        $kategori_buletin = kategori_buletin::create([
            'nama_kategori'     => $request->nama_kategori,
        ]);
        return redirect('/admin/buletin')-> with('success', 'Kategori Berhasil Ditambahkan');
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
            'nama_kategori' => ['required', 'string'],
        ]);
        $data = kategori_buletin::where('id',$id)->first();
        $data->nama_kategori = $request->get('nama_kategori');
        $data->save();
        return redirect('/admin/buletin')-> with('success', 'kategori Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori_buletin::find($id)->delete();
        return redirect('/admin/buletin')
        -> with('success', 'kategori Successfully Deleted');
    }
}
