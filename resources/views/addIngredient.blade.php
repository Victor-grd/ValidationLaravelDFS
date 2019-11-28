@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{ route('addIngredientAction') }}">
                @csrf
                <input type="text" name="name" placeholder="name">
                <input type="text" name="image" placeholder="url">
                <select name="genre">
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
                <input type="checkbox" name="limited" id="">
                <input type="submit" value="ok">
            </form>
        </div>
    </div>
</div>
@endsection
