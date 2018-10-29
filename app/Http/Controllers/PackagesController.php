<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return back();
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
        //
    }

    public function get_package(Request $request)
    {
        if (!$request->ajax()) return redirect('/'); //Si no es petición ajax redirecciona al home

        $package = Package::find(request()->idPackage);

        return ['package' => $package];
    }

    public function update_package(Request $request)
    {
        if (!$request->ajax()) return redirect('/'); //Si no es petición ajax redirecciona al home

        $package = Package::find(request()->idPackage);

        $package->title = request()->title;
        //$package->file = request()->file;
        $package->price = request()->price;
        $package->excerpt = request()->excerpt;
        $package->date_initial = request()->date_initial;
        $package->date_final = request()->date_final;
        $package->save();
        if($request->file('file')){
            $path = Storage::disk('public')->put('imagenes', $request->file('file'));
            $package->fill(['file' => asset($path)])->save();
        }
    }

}
