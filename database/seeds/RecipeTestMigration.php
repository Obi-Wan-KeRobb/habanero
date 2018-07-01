<?php

use Illuminate\Database\Seeder;
use App\Recipe;
use App\Ingredient;
// use Tests\TestCase;
// namespace Tests\Feature;
// use Illuminate\Database\Seeder;
// namespace database\seeds;

class RecipeTestMigration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('recipes')->delete();
        $json = File::get('./resources/assets/js/recipies.json');
        $data = json_decode($json);

        foreach ($data as $value) {

            // popola la tabella dei recipes
            foreach ($value->name_recipe as $index => $recipe) {

                $existing_rec = Recipe::firstOrNew([
                    'recipe' => $recipe->recipe,
                ]);

                $existing_rec->label = $recipe->label;
                $existing_rec->src_img = $recipe->src;

                $existing_rec->save();
                
            }

            // popola la tabella degli ingredienti
            foreach ($value->ingredients as $index => $ing) {

                $existing_ing = Ingredient::firstOrNew([
                    'name_ingredients' => $ing,
                ]);

                $existing_ing->name_ingredients = $ing;

                $existing_ing->save();
                
            }

            foreach ($value->name_recipe as $index => $recipe) {
                $existing_recipe = Recipe::where('recipe', $recipe->recipe)->first();
            }

            $existing_ingredients = collect([]);

            foreach ($value->ingredients as $index => $ing) {
                $existing_ingredient = Ingredient::where('name_ingredients', $ing)->first();

                if (empty($existing_ingredient)) {
                    continue;
                }

                $existing_ingredients->push($existing_ingredient);
            }

            // dd($existing_ingredients);

            $existing_recipe->ingredients()->sync($existing_ingredients->pluck('id'));
        }
        
    }
}
