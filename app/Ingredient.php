<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    public function post()
    {
        return $this->belongsTo('App\Recipe');
    }
}
