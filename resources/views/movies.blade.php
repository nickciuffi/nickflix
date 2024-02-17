@extends('layouts/app')

@section('content')
    <main class="bg-secondary text-white min-h-[100vh]">
        <section class="pt-[100px]">
            <x-search-form></x-search-form>

        </section>
        <section class="pt-[40px] pb-10">
            <div class="container mx-auto overflow-visible">
                <h2 class="mb-4 text-xl">Ordem Alfabética</h2>
                @if (sizeof($filmesByName) == 0)
                    <p>Nenhum filme encontrado </p>
                @else
                    @include('components.movie-cards-wrapper', ['movies' => $filmesByName])
                @endif
            </div>
        </section>
        <section class="pt-[0px] pb-10">
            <div class="container mx-auto overflow-visible">
                <h2 class="mb-4 text-xl">Novidades</h2>
                @if (sizeof($filmesByTime) == 0)
                    <p>Nenhum filme encontrado </p>
                @else
                    @include('components.movie-cards-wrapper', ['movies' => $filmesByTime])
                @endif
            </div>
        </section>
    </main>
@endsection
