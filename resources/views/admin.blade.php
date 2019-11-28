@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a class="btn" href="{{ route('addIngredient') }}">Add Ingredient</a>
            <a class="btn" href="{{ route('addCocktail') }}">Add Cocktail</a>
            <a class="btn" href="{{ route('addGenre') }}">Add Genrre</a>
            <hr>
            <div class="section section__genres">
                @foreach($ingredient_genres as $ingredient_genre)
                <div class="section__item">
                    <div class="section__item--center">
                        <p>{{ $ingredient_genre->name }}</p>
                        <div class="section__action">
                            <form class="" action="{{ route('editGenreForm') }}" method="post">
                                @csrf
                                    <input type="hidden" class="btn" name="id" value="{{ $ingredient_genre->id }}">
                                    <input type="submit" class="btn" name="" value="Edit">
                            </form>
                            <form class="" action="{{ route('deleteGenre') }}" method="post">
                                @csrf
                                    <input type="hidden" class="btn" name="id" value="{{ $ingredient_genre->id }}">
                                    <input type="submit" class="btn" name="" value="Suppr">
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <hr>
            <div class="section section__ingredients">
                @foreach($ingredients as $ingredient)
                    <div class="section__item">
                        <div class="section__item--center">
                            <h3>{{ $ingredient->name }}</h3>
                            <img src="{{ $ingredient->image }}" alt="" height="254">
                            <div class="section__action">
                                <form class="" action="{{ route('editIngredientForm') }}" method="post">
                                    @csrf
                                        <input type="hidden" class="btn" name="id" value="{{ $ingredient->id }}">
                                        <input type="submit" class="btn" name="" value="Edit">
                                </form>
                                <form class="" action="{{ route('deleteIngredient') }}" method="post">
                                    @csrf
                                        <input type="hidden" class="btn" name="id" value="{{ $ingredient->id }}">
                                        <input type="submit" class="btn" name="" value="Suppr">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="section section__cocktails">
                @foreach($cocktails as $cocktail)
                <div class="section__item">
                    <div class="section__item--center">

                        <h3>{{ $cocktail->name }}</h3>
                        <img src="{{ $cocktail->image }}" alt="" height="254">
                        <div class="section__action">

                            <form class="" action="{{ route('editCocktailForm') }}" method="post">
                                @csrf
                                    <input type="hidden" class="btn" name="id" value="{{ $cocktail->id }}">
                                    <input type="submit" class="btn" name="" value="Edit">
                            </form>
                            <form class="" action="{{ route('deleteCocktail') }}" method="post">
                                @csrf
                                    <input type="hidden" class="btn" name="id" value="{{ $cocktail->id }}">
                                    <input type="submit" class="btn" name="" value="Suppr">
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
