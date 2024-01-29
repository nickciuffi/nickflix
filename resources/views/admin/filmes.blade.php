@extends('layouts/app')

@section('content')
    <main class="bg-primary relative z-10">
        <section class="py-[100px] min-h-[100vh]">
            <div class="container text-white mx-auto">
                <h1 class="text-3xl mb-8 font-bold">Gerenciar Filmes</h1>
                <article class="bg-secondary px-8 py-6 -mx-8 rounded-md text-xl">
                    @foreach ($movies as $movie)
                    <form action="{{route('update-film', $movie->id)}}" method="post">
                        @csrf
                        <ul class="grid grid-cols-2 gap-y-4 gap-x-6">
                            <li class="flex items-start flex-col gap-2 w-full">
                                <label for="title" class="py-1">Titulo:</label>
                                <input type="text" class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm color-white" id="title" value="{{$movie->title}}">
                            </li>
                            <li class="flex items-start flex-col gap-2 w-full">
                                <label for="desc" class="py-1">Duração:</label>
                                <input class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm color-white" type="time" id="desc" value="{{substr($movie->duration, 0, -3)}}">
                            </li>
                            <li class="flex items-start flex-col gap-2 w-full">
                                <label for="desc" class="py-1">banner Link:</label>
                                <input class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm color-white" type="text" id="desc" value="{{$movie->thumb_link}}">
                            </li>
                            <li class="flex items-start flex-col gap-2 w-full">
                                <label for="desc" class="py-1">Video Link:</label>
                                <input class="bg-primary border-2 border-zinc-500 border-solid w-full py-1 px-2 rounded-sm color-white" type="text" id="desc" value="{{$movie->video_link}}">
                            </li>
                            <li class="flex items-start flex-col gap-2 w-full col-span-2">
                                <label for="desc" class="py-1">Descrição:</label>
                                <textarea rows="3" class="bg-primary resize-y w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm color-white" id="desc">
                                    {{$movie->description}}
                                </textarea>
                            </li>
                            <li class="flex justify-end col-span-2">
                                <button class="bg-primary px-8 py-1 border-2 border-zinc-400 border-solid">Editar</button>
                            </li>

                        </ul>
                    </form>
                    @if(!$loop->last)
                        <div class="h-[2px] w-[95%] bg-white mx-auto my-10"></div>
                    @endif
                    @endforeach
                </article>

            </div>
        </section>
    </main>
@endsection
