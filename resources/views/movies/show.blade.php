@extends('layouts.app')

@section('title', 'Movie detail')

@section('content')
    <main>
        <div id="movie-detail" class="container">

            <div class="row pt-5">

                <div class="col-12 col-lg-4">
                    <div class="img-box">
                        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">

                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <h1>{{ $movie->title }}</h1>
                    <div class="d-flex align-items-baseline">
                        <div class="text-uppercase me-3">Original title:</div>
                        <h4 class="">{{ $movie->original_title }}</h4>

                    </div>

                    <div>Language: {{ $movie->language }}</div>
                    <div>Vote: {{ $movie->vote }}</div>
                    <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to films</a>


                </div>

            </div>

    </main>

@endsection
