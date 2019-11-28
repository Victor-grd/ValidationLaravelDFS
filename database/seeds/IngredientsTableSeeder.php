<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            [
                'name' => 'Absolut',
                'image' => 'https://www.absolut.com/fr/data/produits/14527758265831.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Lime ',
                'image' => 'https://www.absolut.com/fr/data/produits/14932245117442.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Extrakt ',
                'image' => 'https://www.absolut.com/fr/data/produits/15577427637540.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Citron ',
                'image' => 'https://www.absolut.com/fr/data/produits/14470764503659.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Raspberri ',
                'image' => 'https://www.absolut.com/fr/data/produits/14526799013352.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Mango ',
                'image' => 'https://www.absolut.com/fr/data/produits/14470764509138.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Vanilla ',
                'image' => 'https://www.absolut.com/fr/data/produits/14470764498460.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Apeach ',
                'image' => 'https://www.absolut.com/fr/data/produits/14470764505799.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Pears ',
                'image' => 'https://www.absolut.com/fr/data/produits/14470764502600.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut Ruby red ',
                'image' => 'https://www.absolut.com/fr/data/produits/14470764505664.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
            [
                'name' => 'Absolut 100 ',
                'image' => 'https://www.absolut.com/fr/data/produits/14470764514649.jpg',
                'ingredient_genre_id' => '1',
                'limited' => false
            ],
        ]);
    }
}
