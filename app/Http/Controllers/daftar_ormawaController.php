<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_ormawa;
use App\Models\ormawa;
use App\Models\jurusan;
use App\Models\User;

class daftar_ormawaController extends Controller
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
        $ormawa = ormawa::get();
        $data = array(
            array(
               
            )
        );
        $start = 0;
        foreach($ormawa as $i){
            $data[$start][0]=$i->nama_ormawa;
            $data[$start][1]=daftar_ormawa::where('id_ormawa',$i->id)->count();
            $start++;
        }
        $link = "dashboard";
        return view('admin.dashboard',compact('data','link'));
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
            'id_ormawa' => ['required'],
        ]);
        $daftar_ormawa = daftar_ormawa::create([
            'id_user'     => $request->id_user,
            'id_ormawa'     => $request->id_ormawa,
        ]);
        return redirect('/admin/ormawa/'.$request->id_ormawa)-> with('success', 'Anggota ormawa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = daftar_ormawa::with('User','ormawa')->orderBy('id_ormawa','ASC')->get();
        $user = User::with('jurusan','level')->get();
        $ormawa = ormawa::get();
        $jurusan = jurusan::get();
        $link = 'ormawa';
        return view('admin.ormawaDetail', compact('data','link','user','ormawa','jurusan'));
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
        $cad = daftar_ormawa::where('id',$id)->first()->id_ormawa;
        daftar_ormawa::find($id)->delete();
        return redirect('/admin/ormawa/'.$cad)
        -> with('success', 'Anggota berhasil dihabpus');
    }
}
