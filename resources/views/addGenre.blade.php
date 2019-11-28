@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{ route('addGenreAction') }}">
                @csrf
                <input type="text" name="name" placeholder="name">
                <input type="submit" value="ok">
            </form>
        </div>
    </div>
</div>
@endsection
