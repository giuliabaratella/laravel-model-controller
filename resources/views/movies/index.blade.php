@extends('layouts.app')

@section('title', 'All Movies')

@section('content')
    <main>
        <div class="container">
            <h1>Movies</h1>

            <div class="row row-gap-4">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-title">{{ $movie->original_title }}</h6>

                                <p class="card-text">Language: {{ $movie->language }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </main>

@endsection
