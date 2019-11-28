@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{ route('addCocktailAction') }}">
                @csrf
                <input type="text" name="name" placeholder="name">
                <input type="text" name="image" placeholder="url">
                <select name="genre" multiple>
                    @foreach($ingredients as $ingredient)
                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="ok">
            </form>
        </div>
    </div>
</div>
@endsection
