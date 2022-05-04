@extends('base')

@section('title', 'Movies')

@section('content')
    <h1 class="page-title">Movies from Older to Newer</h1>

    <div class="container">
        @foreach ($movies as $movie)
            <div class="movie-card">
                <h3 class="movie-title">{{ $movie->title }}</h3>
                <div class="row">
                    <div class="left-column">Original Title:</div>
                    <div class="right-column">{{ $movie->original_title }}</div>
                </div>
                <div class="row">
                    <div class="left-column">Nationality:</div>
                    <div class="right-column">{{ $movie->nationality }}</div>
                </div>
                <div class="row">
                    <div class="left-column">Release Date:</div>
                    <div class="right-column">{{ $movie->date }}</div>
                </div>
                <div class="row">
                    <div class="left-column">Vote:</div>
                    <div class="right-column">{{ $movie->vote }}</div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- @dd($movies) --}}
@endsection
