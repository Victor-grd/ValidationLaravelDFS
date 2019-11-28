@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{ route('editGenreAction') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $genre->id }}">
                <input type="text" name="name" value="{{ $genre->name }}">
                <input type="submit" value="ok">
            </form>
        </div>
    </div>
</div>
@endsection
