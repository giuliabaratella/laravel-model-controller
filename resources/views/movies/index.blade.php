@extends('layouts.app')

@section('title', 'All Movies')

@section('content')
    <main>
        <div id="movie-list" class="container py-5">
            <h1 class="text-uppercase">Movies</h1>

            <div class="row row-gap-4">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-title">{{ $movie->original_title }}</h6>

                                <a href="{{ route('movies.show', $movie->id) }}" class="btn">Show details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </main>

@endsection
