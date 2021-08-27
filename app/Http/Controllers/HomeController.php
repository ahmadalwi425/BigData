<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buletin;
use App\Models\kategori_buletin;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //nampilin konten buletin
        $data = buletin::with('kategori_buletin')->orderBy('id', 'DESC')->get();
        $link = 'home';
        return view('home', compact('data', 'link'));
    }
    
}
