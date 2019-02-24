<?php

namespace App\Http\Controllers;
use App\Juego;

use Illuminate\Http\Request;

class JUEGOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $juegos = Juego::all()->toArray();
        
        return view('juego.index', compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('juego.create');
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
        $juego = new Juego([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'description' => $request->input('description')
        ]);
        $juego->save();
        return redirect('/juego');        
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

    public function info($id)
    {
        //
        $juego = Juego::find($id);
        return $juego; 
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
        $juego = Juego::find($id);
        return view('juego.edit', compact('juego','id'));          
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
        $juego = Juego::find($id);
        $juego->name = $request->input('name');
        $juego->image = $request->input('image');
        $juego->description = $request->input('description');
        $juego->save();
        return redirect('/juego');
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
        $juego = Juego::find($id);
        $juego->delete();  
        return redirect('/juego');        
    }
}
