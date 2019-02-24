<?php

namespace App\Http\Controllers;
use App\Moneda;

use Illuminate\Http\Request;

class MONEDAController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $monedas = Moneda::all()->toArray();
        
        return view('moneda.index', compact('monedas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('moneda.create');
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
        $moneda = new Moneda([
            'name' => $request->input('name'),
            'image' => $request->input('image')
        ]);
        $moneda->save();
        return redirect('/moneda');
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
        $moneda = Moneda::find($id);
        return $moneda; 
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
        $moneda = Moneda::find($id);
        return view('moneda.edit', compact('moneda','id'));    

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
        $moneda = Moneda::find($id);
        $moneda->name = $request->input('name');
        $moneda->image = $request->input('image');
        $moneda->save();
        return redirect('/moneda');


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
        $moneda = Moneda::find($id);
        $moneda->delete();
        return redirect('/moneda');
    }
}
