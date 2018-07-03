<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RestaurantController extends Controller
{
    //
    public function restaurantHome() {
        $recipes = Recipe::get();

        $order = [
            "antipasto",
            "primo piatto",
            "secondo piatto",
            "contorno",
            "dolce"
        ];

        $recipes = $recipes->sortBy(function($model) use ($order) {
            return array_search( strtolower($model->label), $order);
        });
        return view('layouts.restaurant')
            ->with('recipes', $recipes)
            ->with('orders', $order);
    }
}
