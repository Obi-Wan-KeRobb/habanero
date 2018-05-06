<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

use App\Recipe;

class HomeController extends Controller
{
    //
    public function homePage(){

        $recipes = Recipe::get();
        $instagram = new Instagram('2692277519.1677ed0.e95c118b1e204bd888d5e5fe9aaf51bb');

        $images = collect($instagram->get())->filter(function ($value, $key) {
            return $key < 8;
        });

        // dd($images);

        $images = $images->map(function ($each) {
            $img = $each->images->standard_resolution->url;
            $link = $each->link;

            return [$img, $link];
        });

        return view('layouts.homepage')
            ->with('recipes', $recipes)
            ->with('feedImages', $images);
    }
}
