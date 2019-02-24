<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    //
    protected $fillable = ['name','image','description'];

    public function monedas() {
        return $this->belongsToMany('App\Moneda');
    }


}
