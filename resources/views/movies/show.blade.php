@extends('layouts.app')

@section('title', 'Movie detail')

@section('content')
    <main>
        <div id="movie-detail" class="container py-5">

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

                    <div class="mb-2">Language: {{ $movie->language }}</div>
                    <div class="mb-2">Vote: {{ $movie->vote }}</div>
                    <h4>Plot:</h4>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel distinctio autem,
                        temporibus voluptate praesentium, ad quisquam iste expedita cum soluta magni dolor eaque
                        consequuntur quos nobis! Blanditiis iusto dignissimos est doloremque facere dolorum. Veritatis
                        necessitatibus nemo, expedita architecto maiores nulla. Quibusdam vel repellendus in animi sunt
                        dolore alias id ad, ab quisquam odio dolores eaque autem est nemo perspiciatis eum facilis molestias
                        asperiores? Ducimus officia cum distinctio exercitationem fugit, nam veniam maxime eveniet deserunt
                        deleniti maiores fuga illum provident dolor soluta qui illo accusantium numquam magnam incidunt
                        ipsum rem quam tempore beatae! Architecto harum ipsa nobis, voluptatem eaque animi cumque.</p>
                    <a href="{{ route('movies.index') }}" class="btn">Back to films</a>


                </div>

            </div>

    </main>

@endsection
