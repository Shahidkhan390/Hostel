<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $guarded = [];
    public function room()
    {

    return $this->belongTo('App\Room');
}
    }

