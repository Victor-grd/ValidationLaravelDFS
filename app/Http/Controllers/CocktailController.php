<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function cocktail()
    {
        $cocktails = Cocktail::all();
        return view('cocktail', ['cocktails' => $cocktails]);
    }

/* ------------------------- Add -------------------------------- */

    public function addCocktail()
    {
        $ingredients = Ingredient::All();
        return view('addCocktail', ['ingredients' => $ingredients]);
    }

    public function addCocktailAction(Request $request)
    {
        $new = new Cocktail();
        $new->name = $request->input('name');
        $new->image = $request->input('image');
        $new->ingredient_id = $request->input('genre');
        $new->save();
        return redirect('/');
    }

/* ------------------------- UPDATE -------------------------------- */

    public function editCocktailForm(Request $request){
        $cocktail = Cocktail::find($request->input('id'));
        $ingredients = Ingredient::all();
        return view('editCocktailForm',['cocktail' => $cocktail, 'ingredients' => $ingredients]);
    }

    public function editCocktailAction(Request $request){
        // dd($request);
        $update = Cocktail::find($request->input('id'));
        $update->name = $request->input('name');
        $update->image = $request->input('image');
        $update->ingredient_id = $request->input('genre');
        $update->save();
        return redirect('/');
    }


/* ------------------------- Delete -------------------------------- */

    public function deleteCocktail(Request $request){
        Cocktail::destroy($request->input('id'));
        return redirect ('/');
    }
}
