<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $fillabe = [
        'label',
        'recipe',
        'src'
    ];
}
