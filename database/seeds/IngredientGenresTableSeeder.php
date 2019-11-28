<?php

use Illuminate\Database\Seeder;

class IngredientGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('IngredientGenres')->insert([
            [
                'name' => 'Alcohol',
            ],
            [
                'name' => 'Soda',
            ],
            [
                'name' => 'Juice',
            ]
        ]);
    }
}
