<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\IngredientGenre;
use Illuminate\Http\Request;

class IngredientController extends Controller
{

    /* ------------------------- View -------------------------------- */


    public function alcohol()
    {
        $alcohols = Ingredient::where('ingredient_genre_id', '1')->get();
        return view('alcohol', ['alcohols' => $alcohols]);
    }
    // public function soda()
    // {
    //     $alcohols = Ingredient::where('ingredient_genre_id', '2')->get();
    //     return view('alcohol', ['alcohols' => $alcohols]);
    // }
    // public function juice()
    // {
    //     $alcohols = Ingredient::where('ingredient_genre_id', '3')->get();
    //     return view('alcohol', ['alcohols' => $alcohols]);
    // }
    
    /* ------------------------- Add -------------------------------- */


    public function addIngredient()
    {
        $genres = IngredientGenre::All();
        // dd($genres);
        return view('addIngredient', ['genres' => $genres]);
    }

    public function addIngredientAction(Request $request)
    {
        $new = new Ingredient();
        $new->name = $request->input('name');
        $new->image = $request->input('image');
        $new->ingredient_genre_id = $request->input('genre');
        if ($request->input('limited') == null) {
            $new->limited = 0;
        } else {
            $new->limited = 1;
        }
        $new->save();
        return redirect('/');
    }

/* ------------------------- UPDATE -------------------------------- */

    public function editIngredientForm(Request $request){
        $ingredient = Ingredient::find($request->input('id'));
        $genres = IngredientGenre::all();
        return view('editIngredientForm',['ingredient' => $ingredient, 'genres' => $genres]);
    }

    public function editIngredientAction(Request $request){
        // dd($request);
        $update = Ingredient::find($request->input('id'));
        $update->name = $request->input('name');
        $update->image = $request->input('image');
        $update->ingredient_genre_id = $request->input('genre');
        if ($request->input('limited') == null) {
            $update->limited = 0;
        } else {
            $update->limited = 1;
        }
        $update->save();
        return redirect('/');
    }

/* ------------------------- Delete -------------------------------- */

    public function deleteIngredient(Request $request){
        Ingredient::destroy($request->input('id'));
        return redirect ('/');
    }
}
