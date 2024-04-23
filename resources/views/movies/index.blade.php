@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <div class="container">
        <h1>All Movies</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection
