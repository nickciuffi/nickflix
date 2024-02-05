@extends('layouts/app')

@section('content')
    <main class="bg-primary relative z-10">
        <section class="py-[100px] min-h-[100vh]">
            <div class="container text-white mx-auto">
                <h1 class="text-3xl mb-8 font-bold">Adicionar Filmes</h1>
                <article class="bg-secondary px-8 py-6 -mx-8 rounded-md text-xl">

                        <form action="{{route('admin.add-movie')}}" method="post">
                            @csrf
                            <ul class="grid grid-cols-2 gap-y-4 gap-x-6">
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="title" class="py-1">Titulo:</label>
                                    <input type="text" required id="title" name="title" class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" id="title">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="duration" class="py-1">Duração:</label>
                                    <input name="duration" required class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" type="time" id="duration">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="banner" class="py-1">banner Link:</label>
                                    <input name="banner_link" max="2000" class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" type="text" id="banner">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full">
                                    <label for="movie-input-file" class="py-1">Video:</label>
                                    <label for="movie-input-file" id="movie-input-file-name-shower" class="bg-primary border-2 border-zinc-500 h-[40px] border-solid w-full py-1 px-2 rounded-sms cursor-pointer">Escolha o seu arquivo</label>
                                    <input name="video" id="movie-input-file" accept="video/x-matroska video/mp4" class="hidden " type="file">
                                </li>
                                <li class="flex items-start flex-col gap-2 w-full col-span-2">
                                    <label for="desc" class="py-1">Descrição:</label>
                                    <textarea value="" maxlength="800" rows="4" name="description" class="bg-primary resize-y w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" id="desc" required></textarea>
                                </li>
                                <li class="flex justify-end gap-4 col-span-2">
                                    <button class="bg-primary px-8 py-1 rounded-md border-2 border-primary hover:brightness-75 border-solid">Adicionar</button>
                                </li>
                            </ul>
                        </form>
                </article>
            </div>
        </section>
    </main>
@endsection
