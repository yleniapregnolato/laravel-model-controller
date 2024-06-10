@extends('layouts.app')

@section('content')
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
    </ul>
    <h2 class="text-center mb-5">Movies:</h2>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
