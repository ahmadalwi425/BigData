<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buletin;
use App\Models\kategori_buletin;
use Illuminate\Support\Facades\Validator;

class buletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last = buletin::orderBy('id','desc')->first();
        $kategori = kategori_buletin::get();
        $link = "buletin";
        $data = buletin::orderBy('id','desc')->get();
        $link = "Buletin";
        return view('buletin', compact('last','kategori','data','link'));
    }

    public function index2()
    {
        $data = buletin::with('kategori_buletin')->get();
        $link = "Buletin";
        return view('admin.buletin', compact('data','link'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cover' => ['required','mimes:jpg,png'],
            'judul' => ['required', 'string', 'max:25'],
            'content' => ['required'],
            'id_kategori_buletin' => ['required', 'number'],
        ]);
    }

    
    public function show($id)
    {
        $data = buletin::with('kategori_buletin')->where('id',$id)->first();
        $link = "Buletin Edit";
        return view('admin.buletinedit', compact('data','link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $image = $request->file('cover');
        // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
        $buletin = buletin::with('kategori_buletin')->where('id', $id)->first();
        if($buletin->cover && file_exists(storage_path('app/public/' , $buletin->cover))) {
            Storage::delete('public/' . $buletin->cover);
        }
        $image_name = $request->file('cover')->store('img','public');
        $data = buletin::where('id',$id)->with('kategori_buletin')->first();
        $data->judul = $request->get('judul');
        $data->konten = $request->get('konten');
        $data->id_kategori_buletin = $request->get('id_kategori_buletin');
        $data->save();
        return redirect('/admin/buletin')-> with('success', 'buletin Successfully updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        buletin::find($id)->delete();
        return redirect('/admin/buletin')
        -> with('success', 'buletin Successfully Deleted');
    }
}
