@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($cocktails as $cocktail)
                <img src="{{ $cocktail->image }}" alt="" height="254">
            @endforeach
        </div>
    </div>
</div>
@endsection
