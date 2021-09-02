<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\level;
use App\Models\jurusan;

class userController extends Controller
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
        $data = User::with('level','jurusan')->get();
        $level = level::get();
        $jurusan = jurusan::get();
        $link = 'user';
        return view('admin.user', compact('data','link','level', 'jurusan'));
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
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'no_hp' => ['required'],
            'id_level' => ['required'],
            'id_jurusan' => ['required'],
        ]);
        
        return User::create([
            'nama' => $data['nama'],
            'nim' => $data['nim'],
            'no_hp' => $data['no_hp'],
            'id_level' => $data['id_level'],
            'id_jurusan' => $data['id_jurusan'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect('/admin/user')-> with('success', 'user Successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::with('level','jurusan')->where('id',$id)->first();
        $level = level::get();
        $link = 'user';
        return view('admin.userDetail', compact('data','link','level'));
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
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_hp' => ['required'],
            'id_level' => ['required'],
            'id_jurusan' => ['required'],
        ]);
        $data = User::where('id',$id)->first();
        if($request->password){
            if(Hash::make($data->password) == Hash::make($passwordlama)){
                $data->password = Hash::make($passwordlama);
            }else{
                return redirect('/admin/user')-> with('success', 'user fail updated');
            }

        }
        
        $data->nama = $request->get('nama');
        $data->email = $request->get('email');
        $data->no_hp = $request->get('no_hp');
        $data->id_level = $request->get('id_level');
        $data->id_jurusan = $request->get('id_jurusan');
        $data->save();
        return redirect('/admin/user')-> with('success', 'user Successfully updated');
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
