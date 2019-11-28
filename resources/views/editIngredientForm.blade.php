@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="{{ $ingredient->image }}" alt="{{ $ingredient->name }}" height="254">

            <form action="{{ route('editIngredientAction') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $ingredient->id }}">
                <input type="text" name="name" placeholder="name" value="{{ $ingredient->name }}">
                <input type="text" name="image" placeholder="url" value="{{ $ingredient->image }}">
                <select name="genre">
                    @foreach($genres as $genre)
                        @if($ingredient->ingredient_genre_id == $genre->id)
                            <option selected value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @else
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endif

                    @endforeach
                </select>
                <input type="checkbox" name="limited" id="">
                <input type="submit" value="ok">
            </form>
        </div>
    </div>
</div>
@endsection
