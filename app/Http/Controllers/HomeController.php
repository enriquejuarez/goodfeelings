<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Gallery;
use App\Package;
use App\Section;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $fotos = Gallery::orderBy('id', 'DESC')
            ->where('status', 'on')
            ->where('reference', 'encabezado')
            ->get();
        $paquetes = Package::orderBy('id', 'DESC')
            ->where('status', 'on')
            ->get();
        $destinos = Destination::orderBy('id', 'DESC')
            ->where('status', 'on')
            ->get();
        $services = Service::orderBy('id', 'DESC')
            ->where('status', 'on')
            ->get();
        $sections = Section::select('name', 'title')
            ->where('status', 'on')
            ->get()->mapWithKeys(function ($item) {
            return [$item['name'] => $item['title']];
        })->toArray();
        return view('home', compact('fotos', 'paquetes', 'destinos', 'sections', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$post = Post::create($request->all());

        //Image
        if($request->file('file')){
            $path = Storage::disk('public')->put('imagenes', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }
        //$post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Entrada creada con éxito');
    }

}
