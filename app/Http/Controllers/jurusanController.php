<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class jurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jurusan::get();
        $link = 'jurusan';
        return view('admin.jurusan', compact('data','link'));
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
            'nama_jurusan' => ['required', 'string'],
        ]);
        $jurusan = jurusan::create([
            'nama_jurusan'     => $request->nama_jurusan,
        ]);
        return redirect('/admin/jurusan')-> with('success', 'Jurusan Berhasil Ditambahkan');
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
            'nama_jurusan' => ['required', 'string'],
        ]);
        $data = jurusan::where('id',$id)->first();
        $data->nama_jurusan = $request->get('nama_jurusan');
        $data->save();
        return redirect('/admin/jurusan')-> with('success', 'jurusan Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jurusan::find($id)->delete();
        return redirect('/admin/jurusan')
        -> with('success', 'jurusan Successfully Deleted');
    }
}
