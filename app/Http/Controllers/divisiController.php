<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\divisi;
use Illuminate\Validation\Validator;

class divisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = divisi::get();
        $link = 'divisi';
        return view('admin.divisi', compact('data','link'));
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
            'nama_divisi' => ['required', 'string'],
            'deskripsi' => ['required'],
        ]);
        $divisi = divisi::create([
            'nama_divisi'     => $request->nama_divisi,
            'deskripsi'     => $request->deskripsi,
        ]);
        return redirect('/admin/divisi')-> with('success', 'divisi Successfully created');
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
            'nama_divisi' => ['required', 'string'],
        ]);
        $data = divisi::where('id',$id)->first();
        $data->nama_divisi = $request->get('nama_divisi');
        $data->deskripsi = $request->get('deskripsi');
        $data->save();
        return redirect('/admin/divisi')-> with('success', 'divisi Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        divisi::find($id)->delete();
        return redirect('/admin/divisi')
        -> with('success', 'divisi Successfully Deleted');
    }
}
