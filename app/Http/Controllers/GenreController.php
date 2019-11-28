<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\IngredientGenre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

/* ------------------------- Add -------------------------------- */

    public function AddGenre()
    {
        return view('addGenre');
    }

    public function addGenreAction(Request $request)
    {
        $new = new IngredientGenre();
        $new->name = $request->input('name');
        $new->save();
        return redirect('/');
    }

/* ------------------------- UPDATE -------------------------------- */

    public function editGenreForm(Request $request){
        $genre = IngredientGenre::find($request->input('id'));
        return view('editGenreForm',['genre' => $genre]);
    }

    public function editGenreAction(Request $request){
        // dd($request);
        $update = IngredientGenre::find($request->input('id'));
        $update->name = $request->input('name');
        $update->save();
        return redirect('/');
    }


    /* ------------------------- Delete -------------------------------- */

    public function deleteGenre(Request $request){
        IngredientGenre::destroy($request->input('id'));
        return redirect ('/');
    }

}