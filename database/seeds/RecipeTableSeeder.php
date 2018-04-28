<?php

use Illuminate\Database\Seeder;
use App\Recipe;

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

        DB::table('recipes')->delete();
        $json = File::get('./resources/assets/js/recipies.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Recipe::create(array(
                'label' => $obj->label,
                'recipe' => $obj->recipe,
                'src_img' => $obj->src
            ));
        }
    }
}
