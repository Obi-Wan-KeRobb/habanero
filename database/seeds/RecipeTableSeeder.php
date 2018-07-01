<?php

use App\Recipe;
use App\Ingredient;
use Illuminate\Database\Seeder;
use Tests\TestCase;
namespace Tests\Feature;
use Illuminate\Database\Seeder;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Populate roles
        factory(Recipe::class, 20)->create();

        // Populate users
        factory(Ingredient::class, 50)->create();

        // Get all the roles attaching up to 3 random roles to each user
        $roles = Recipe::all();

        // Populate the pivot table
        Ingredient::all()->each(function ($user) use ($roles) { 
            $user->roles()->attach(
                $roles->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
