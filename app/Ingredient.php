<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    public $timestamps = false;

    protected $fillabe = [
        'recipe_id'
    ];
    
    public function recipe()
    {
        return $this->belongsToMany('App\Recipe');
    }
}
