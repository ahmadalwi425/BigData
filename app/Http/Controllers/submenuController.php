<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\submenu;
use App\Models\subdivisi;

class submenuController extends Controller
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
    public function index($id)
    {
        $data = submenu::with('subdivisi')->where('id',$id)->first();
        $link = 'submenu';
        return view('admin.submenu', compact('data','link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $subdiv = $id;
        $link = 'submenu';
        return view('admin.submenuCreate', compact('link','subdiv'));
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
            'judul' => ['required', 'string'],
            'id_subdivisi' => ['required'],
            'konten' => ['required'],
        ]);
        $submenu = submenu::create([
            'judul'     => $request->judul,
            'id_subdiv'     => $request->id_subdivisi,
            'konten'     => $request->konten,
        ]);
        return redirect('/admin/subdivisi/'.$request->id_subdivisi)-> with('success', 'Submenu Berhasil Ditambahkan');
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
            'judul' => ['required', 'string'],
            'id_subdivisi' => ['required'],
            'konten' => ['required'],
        ]);
        $data = submenu::where('id',$id)->first();
        $data->judul = $request->get('judul');
        $data->id_subdivisi = $request->get('id_subdivisi');
        $data->konten = $request->get('konten');
        $data->save();
        return redirect('/admin/submenu/'.$data->id)-> with('success', 'submenu Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cad = submenu::where('id',$id)->first()->id_subdiv;
        submenu::find($id)->delete();
        return redirect('/admin/subdivisi/'.$cad)-> with('success', 'submenu Successfully deleted');
    }
}
