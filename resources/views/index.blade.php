@extends('base')

@section('content')
    <h1>Movies</h1>

    <div class="container">
        @foreach ($movies as $movie)
            <div class="movie-card">
                <h3>Italian Title: {{ $movie->title }}</h3>
                <p>Original Title: {{ $movie->original_title }}</p>
                <p>Nationality: {{ $movie->nationality }}</p>
                <p>Release Date: {{ $movie->date }}</p>
                <p>Vote: {{ $movie->vote }}</p>

            </div>
        @endforeach
    </div>
    @dd($movies)
@endsection
