@extends('layouts/app')

@section('content')
    <main class="bg-secondary text-white min-h-[100vh]">
        <section class="pt-[70px]">
            <x-search-form></x-search-form>

        </section>

        <section class="pt-[20px] pb-10">
            <div class="container mx-auto overflow-visible">
                <h2 class="mb-4 text-xl">Novidades</h2>
                @if (sizeof($filmesByTime) == 0)
                    <p>Nenhum filme encontrado </p>
                @else
                    @include('components.movie-cards-wrapper', [
                        'movies' => $filmesByTime,
                        'number' => '2',
                    ])
                @endif
            </div>
        </section>
        <section class="pt-[0px] pb-10">
            <div class="container mx-auto overflow-visible">
                <h2 class="mb-4 text-xl">Ordem Alfabética</h2>
                @if (sizeof($filmesByName) == 0)
                    <p>Nenhum filme encontrado </p>
                @else
                    @include('components.movie-cards-wrapper', [
                        'movies' => $filmesByName,
                        'number' => '1',
                    ])
                @endif
            </div>
        </section>
    </main>
@endsection
