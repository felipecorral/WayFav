<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PLAYERController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = Player::all()->toArray();
        
        return view('player.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('player.create');
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
        $player = new Player([
            'name' => $request->input('name'),
            'device_id' => $request->input('device_id'),
            //'level' => $request->input('level','1'),
            //'score' => $request->input('score','0'),
            //'gold' => $request->input('gold','0'),
            //'inventory' => $request->input('inventory','0')
        ]);
        $player->save();
        return redirect('/player');
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

    public function info($id,$name = '')
    {
        //
        //$player = Player::find($id);
        //$player= Player::where('device_id', $id)->get();
        //if ($player->exist());
        $player = Player::firstOrCreate(['device_id' => $id]);
        //$player = Player::firstOrNew(['device_id' => $id]);
        if ($player->name == ''){
            if(empty($name)){
                $name = 'player-' . $id;
            }
            $player->name = $name;
            $player->save();
        }elseif($name != ''){
            //if ($player->name == ''){
            $player->name = $name;
            $player->save();
        }
        //$player= Player::where('device_id', $id);    
        //return view('player.view',compact('player'));
        return $player; 
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
        $player = Player::find($id);
        
        return view('player.edit', compact('player','id'));        
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
        $player = Player::find($id);
        $player->name = $request->input('name');
        $player->device_id = $request->input('device_id');
        $player->level = $request->input('level');
        $player->score = $request->input('score');
        $player->gold = $request->input('gold');
        $player->inventory = $request->input('inventory');
        $player->save();
        return redirect('/player');


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
        $player = Player::find($id);
        $player->delete();
  
        return redirect('/player');
    }
}
