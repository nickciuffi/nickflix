@extends('layouts/app')

@section('content')
    <main class="bg-secondary text-white pt-[50px]">
        <section class="min-h-[calc(100vh-50px)]">
            <div class="container mx-auto py-10">
                <h1 class="text-3xl mb-8">{{ $movie->title }}</h1>
                @if ($movie->video_link)
                    <video controls class="w-full">

                        <source src={{ $movie->video_link }}>
                        <source src="https://player.vimeo.com/video/911301721?h=9142c10a6a&autoplay=0&pip=0">
                    </video>
                @else
                    <p>Video indisponível</p>
                @endif

                <div class="py-10">
                    <h2 class="text-3xl mb-8">Mais informações:</h2>
                    <h3 class="text-2xl mb-4">Descrição:</h3>
                    <p class="text-xl">{{ $movie->description }}</p>
                    <div class="flex mt-4 items-center gap-2">
                        <h3 class="text-2xl">Duração:</h3>
                        <p class="text-2xl">{{ $movie->duration }}</p>
                    </div>
                </div>

            </div>

        </section>
    </main>
@endsection
