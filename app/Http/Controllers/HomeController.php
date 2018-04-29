<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class HomeController extends Controller
{
    //
    public function homePage(){

        $recipes = Recipe::get();

        return view('layouts.homepage')->with('recipes', $recipes);
    }
}
