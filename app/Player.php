<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = ['name','device_id','level','score','gold','inventory'];
}
