<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    //
    protected $fillable = ['name','image'];

    public function juegos() {
        return $this->belongsToMany('App\Juego', 'juegos_monedas','juego_id','moneda_id');
    }

}
