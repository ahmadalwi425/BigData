<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\kal_akademik;
use App\Models\jenis_kal;
use App\Models\semester;
use App\Models\tahun_ajar;

class kal_akademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kal_akademik::with('tahun_ajar','jenis_kal','semester')->get();
        $link = "calender";
        return view('calender', compact('data','link'));
    }

    public function index2()
    {
        $data = kal_akademik::with('tahun_ajar','jenis_kal','semester')->get();
        $link = "kalender";
        $semester = semester::get();
        $jenis_kal = jenis_kal::get();
        $tahun_ajar = tahun_ajar::get();
        return view('admin.kalender', compact('data','jenis_kal','tahun_ajar','semester','link'));
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
            'nama_kegiatan'   => 'required',
            'tgl_mulai'      =>'required',
            'tgl_selesai'     => 'required',
            'id_jenis_kal'   => 'required', 
            'id_tahun_ajar'   => 'required', 
            'id_semester'   => 'required', 
        ]);
        $kal_akademik = kal_akademik::create([
            'nama_kegiatan'     => $request->nama_kegiatan,
            'tgl_mulai'     => $request->tgl_mulai,
            'tgl_selesai'     => $request->tgl_selesai,
            'id_jenis_kal'     => $request->id_jenis_kal,
            'id_tahun_ajar'     => $request->id_tahun_ajar,
            'id_semester'     => $request->id_semester,
        ]);
        return redirect('/admin/kalender')-> with('success', 'kalender Successfully created');
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
            'nama_kegiatan'   => 'required',
            'tgl_mulai'      =>'required',
            'tgl_selesai'     => 'required',
            'id_jenis_kal'   => 'required', 
            'id_tahun_ajar'   => 'required', 
            'id_semester'   => 'required', 
        ]);
        $data = kal_akademik::with('tahun_ajar','jenis_kal','semester')->where('id',$id)->first();
        $data->nama_kegiatan = $request->get('nama_kegiatan');
        $data->tgl_mulai = $request->get('tgl_mulai');
        $data->tgl_selesai = $request->get('tgl_selesai');
        $data->id_jenis_kal = $request->get('id_jenis_kal');
        $data->id_tahun_ajar = $request->get('id_tahun_ajar');
        $data->id_semester = $request->get('id_semester');
        $data->save();
        return redirect('/admin/kalender')-> with('success', 'kegiatan Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kal_akademik::find($id)->delete();
        return redirect('/admin/kalender')
        -> with('success', 'kalender Successfully Deleted');
    }
}
