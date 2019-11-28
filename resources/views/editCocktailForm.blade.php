@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{ route('editCocktailAction') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $cocktail->id }}">
                <input type="text" name="name" placeholder="name" value="{{ $cocktail->name }}">
                <input type="text" name="image" placeholder="url" value="{{ $cocktail->image }}">
                <select name="genre" multiple>
                    @foreach($ingredients as $ingredient)
                        @if($ingredient->ingredient_id == $ingredient->id)
                            <option selected value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                        @else
                            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                        @endif
                    @endforeach
                </select>
                <input type="submit" value="ok">
            </form>
        </div>
    </div>
</div>
@endsection
