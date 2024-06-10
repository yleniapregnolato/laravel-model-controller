@extends('layouts.app')

@section('content')
    <h1>Home page</h1>
    <ul>
        <li><a href="{{ route('movies') }}">Movies</a></li>
    </ul>
@endsection