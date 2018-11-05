<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layanan;
use App\Galleries;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['layanan'] = Layanan::with(['paket'])->get();
        return view('index1', $this->data);
    }

    public function gallery(){
        $this->data['gallery'] = Galleries::get();
        return view('gallery', $this->data);
    }


}
