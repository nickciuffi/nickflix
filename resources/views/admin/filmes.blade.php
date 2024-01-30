@extends('layouts/app')

@section('content')
    <main class="bg-primary relative z-10">
        <section class="py-[100px] min-h-[100vh]">
            <div class="container text-white mx-auto">
                <h1 class="text-3xl mb-8 font-bold">Gerenciar Filmes</h1>
                <article class="bg-secondary px-8 py-6 -mx-8 rounded-md text-xl">
                    <div class="flex justify-between gap-20 mb-10">
                        <div class="">
                            <h2 class="mb-2">Pesquisar:</h2>
                            <form action="{{route('admin.search-movie-by-name')}}" method="get" class="bg-primary px-2 focus-within: border-2 flex border-zinc-500 border-solid rounded-sm gap-2">
                                @csrf
                                <input type="text" name="searchText" class="py-1 px-2 bg-transparent" placeholder="Example@gmail.com">
                                <button><x-zondicon-search width="16" /></button>
                            </form>
                        </div>
                        <a href="{{route('admin.add-movie')}}"><x-ri-add-fill width='40' /></a>
                </div>

                    @if (!isset($movies) || sizeof($movies) == 0)
                        <p>Parece que você não possui filmes asdcadastrados.</p>
                    @else
                        <div class="h-[2px] w-[95%] bg-white mx-auto my-10"></div>
                        @foreach ($movies as $movie)
                        <form action="{{route('admin.update-or-delete-movie', $movie->id)}}" method="post">
                            @csrf
                            <ul class="grid grid-cols-2 gap-y-4 gap-x-6">
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="title" class="py-1">Titulo:</label>
                                    <input type="text" name="title" class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" id="title" value="{{$movie->title}}">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="duration" class="py-1">Duração:</label>
                                    <input name="duration" class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" type="time" id="duration" value="{{substr($movie->duration, 0, -3)}}">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="banner" class="py-1">banner Link:</label>
                                    <input name="banner_link" class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" type="text" id="banner" value="{{$movie->banner_link}}">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="video" class="py-1">Video Link:</label>
                                    <input name="video_link" class="bg-primary border-2 border-zinc-500 border-solid w-full py-1 px-2 rounded-sm" type="text" id="video" value="{{$movie->video_link}}">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full col-span-2">
                                    <label for="desc" class="py-1">Descrição:</label>
                                    <textarea rows="4" name="description" class="bg-primary resize-y w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" id="desc">
                                        {{$movie->description}}
                                    </textarea>
                                </li>
                                <li class="flex justify-end gap-4 col-span-2">
                                    <button name="action" value="edit" class="bg-primary px-8 py-1 rounded-md border-2 border-green-500 hover:brightness-75 border-solid">Editar</button>
                                    <button name="action" value="remove" class="bg-primary px-8 py-1 rounded-md border-2 border-red-500 hover:brightness-75 border-solid">Remover</button>
                                </li>

                            </ul>
                        </form>
                        @if(!$loop->last)
                            <div class="h-[2px] w-[95%] bg-white mx-auto my-10"></div>
                        @endif
                        @endforeach
                        @endif
                </article>
            </div>
        </section>
    </main>
@endsection
