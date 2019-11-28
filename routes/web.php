<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@admin')->name('admin');
Route::get('/alcohol', 'IngredientController@alcohol')->name('alcohol');
Route::get('/cocktail', 'CocktailController@cocktail')->name('cocktail');


/* ------------------------------------------------------------------------------------------------------ */

// Ajout ingredient
Route::get('/addIngredient', 'IngredientController@addIngredient')->name('addIngredient');
Route::get('/addIngredientAction', 'IngredientController@addIngredientAction')->name('addIngredientAction');
// edit ingredient
Route::post('/editIngredientForm', 'IngredientController@editIngredientForm')->name('editIngredientForm');
Route::post('/editIngredientAction', 'IngredientController@editIngredientAction')->name('editIngredientAction');
// delete ingredient
Route::post('/deleteIngredient', 'IngredientController@deleteIngredient')->name('deleteIngredient');
/* ------------------------------------------------------------------------------------------------------ */

// Ajout Cocktail 
Route::get('/addCocktail', 'CocktailController@addCocktail')->name('addCocktail');
Route::get('/addCocktailAction', 'CocktailController@addCocktailAction')->name('addCocktailAction');
// edit Cocktail
Route::post('/editCocktailForm', 'CocktailController@editCocktailForm')->name('editCocktailForm');
Route::post('/editCocktailAction', 'CocktailController@editCocktailAction')->name('editCocktailAction');
// delete Cocktail
Route::post('/deleteCocktail', 'CocktailController@deleteCocktail')->name('deleteCocktail');

/* ------------------------------------------------------------------------------------------------------ */

// Ajout Genre
Route::get('/addGenre', 'GenreController@addGenre')->name('addGenre');
Route::get('/addGenreAction', 'GenreController@addGenreAction')->name('addGenreAction');
// edit Genre
Route::post('/editGenreForm', 'GenreController@editGenreForm')->name('editGenreForm');
Route::post('/editGenreAction', 'GenreController@editGenreAction')->name('editGenreAction');
// delete Cocktail
Route::post('/deleteGenre', 'GenreController@deleteGenre')->name('deleteGenre');