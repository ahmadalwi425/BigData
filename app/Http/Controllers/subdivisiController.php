<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subdivisi;
use App\Models\submenu;
use App\Models\divisi;

class subdivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = subdivisi::with('divisi')->where('id_divisi',$id)->get();
        $divisi = divisi::get();
        $submenu = submenu::get();
        $link = 'subdivisi';
        return view('admin.subdivisi', compact('data','link','divisi','submenu'));
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
            'nama_subdivisi' => ['required', 'string'],
            'id_divisi' => ['required'],
        ]);
        $subdivisi = subdivisi::create([
            'nama_subdivisi'     => $request->nama_subdivisi,
            'id_divisi'     => $request->id_divisi,
        ]);
        return redirect('/admin/subdivisi',$request->id_divisi)-> with('success', 'subdivisi Successfully created');
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
            'nama_subdivisi' => ['required', 'string'],
            'id_divisi' => ['required'],
        ]);
        $data = subdivisi::where('id',$id)->first();
        $data->nama_subdivisi = $request->get('nama_subdivisi');
        $data->id_divisi = $request->get('id_divisi');
        $data->save();
        return redirect('/admin/subdivisi',$data->id_divisi)-> with('success', 'subdivisi Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cad = subdivisi::where('id',$id)->first()->id_divisi;
        subdivisi::find($id)->delete();
        return redirect('/admin/subdivisi',$cad)-> with('success', 'subdivisi Successfully deleted');
    }
}
