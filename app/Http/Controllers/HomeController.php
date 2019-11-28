<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\IngredientGenre;
use App\Cocktail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
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


    public function admin()
    {
        $ingredient_genres = IngredientGenre::all();
        $ingredients = Ingredient::all();
        $cocktails = Cocktail::all();
        return view('admin', ['ingredients' => $ingredients, 'cocktails' => $cocktails, 'ingredient_genres' => $ingredient_genres]);
    }
    public function alcohol()
    {
        $alcohols = Ingredient::where('ingredient_genre_id', '1')->get();
        return view('alcohol', ['alcohols' => $alcohols]);
    }
    public function soda()
    {
        $alcohols = Ingredient::where('ingredient_genre_id', '2')->get();
        return view('alcohol', ['alcohols' => $alcohols]);
    }
    public function juice()
    {
        $alcohols = Ingredient::where('ingredient_genre_id', '3')->get();
        return view('alcohol', ['alcohols' => $alcohols]);
    }
}
