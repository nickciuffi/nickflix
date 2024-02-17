@extends('layouts/app')

@section('content')
    <main class="bg-secondary text-white min-h-[100vh]">
        <section class="pt-[100px]">
            <x-search-form></x-search-form>
        </section>
        <section class="pt-[20px]">
            <div class="container mx-auto">
                <h1 class="mb-4 text-xl">Movies</h1>
                <div class="w-full grid grid-cols-4 gap-x-4 gap-y-4">
                    @foreach ($movies as $movie)
                        @include('components.movie-card', [
                            'bannerLink' => $movie->banner_link,
                            'title' => $movie->title,
                            'id' => $movie->id,
                        ])
                    @endforeach
                </div>
            </div>
            {{ $movies->count() }}

        </section>
    </main>
@endsection
