<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ormawa;
use App\Models\jurusan;

class ormawaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ormawa::with('jurusan')->get();
        $jurusan = jurusan::get();
        $link = 'ormawa';
        return view('admin.ormawa',compact('data','link','jurusan'));
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
            'nama_ormawa' => ['required', 'string'],
            'id_jurusan' => ['required'],
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
        $this->validate($request, [
            'nama_ormawa' => ['required', 'string'],
            'id_jurusan' => ['required'],
        ]);
        $data = ormawa::where('id',$id)->first();
        $data->nama_ormawa = $request->get('nama_ormawa');
        $data->id_jurusan = $request->get('id_jurusan');
        $data->save();
        return redirect('/admin/ormawa')-> with('success', 'ormawa Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ormawa::find($id)->delete();
        return redirect('/admin/ormawa')
        -> with('success', 'ormawa Successfully Deleted');
    }
}
