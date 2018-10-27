<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $galeria = Gallery::orderBy('id', 'DESC')
        //     ->where('status', 'on')
        //     ->where('reference', 'encabezado')
        //     ->get();
        // return view('home', compact('galeria'));
        return view('home');
    }
}
