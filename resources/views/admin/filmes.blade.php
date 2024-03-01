@extends('layouts/app')

@section('content')
    <main class="bg-primary relative z-10">
        <section class="py-[100px] min-h-[100vh]">
            <div class="container text-white mx-auto">
                <h1 class="text-3xl mb-8 font-bold">Gerenciar Filmes</h1>
                <article class="bg-secondary px-8 py-6 -mx-8 rounded-md text-xl">
                    <div class="flex justify-between gap-20 mb-10">
                        <div class="flex items-center gap-4">
                            <form action="{{ route('admin.filter-movie') }}" method="get" class="flex gap-4 items-center">
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <span>Pesquisar por titulo:</span>
                                    <div class=" gap-2">
                                        <input value="{{ isset($title) ? $title : '' }}" type="text" name="title"
                                            class="py-1 h-[42px] bg-primary px-2 border-2 flex border-zinc-500 border-solid rounded-sm"
                                            placeholder="Ex: Vingadores">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span for="orderby">Ordenar por:</span>
                                    <select name="orderBy" id="orderby"
                                        class="py-1 h-[42px] px-2 bg-primary border-2 border-zinc-500 border-solid rounded-sm">
                                        <option value="title"
                                            {{ isset($orderBy) && $orderBy == 'title' ? 'selected' : '' }}
                                            class="bg-primary checked:bg-primary hover:bg-primary">Titulo</option>
                                        <option value="created_at"
                                            {{ isset($orderBy) && $orderBy == 'created_at' ? 'selected' : '' }}
                                            class="bg-primary">Novidade</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <span for="sequence">Ordem:</span>
                                    <select name="sequence" id="sequence"
                                        class="py-1 h-[42px] px-2 bg-primary border-2 border-zinc-500 border-solid rounded-sm">

                                        <option value="asc" class="bg-primary"
                                            {{ isset($orderBy) && $sequence == 'asc' ? 'selected' : '' }}>Crescente</option>
                                        <option value="desc" class="bg-primary"
                                            {{ isset($orderBy) && $sequence == 'desc' ? 'selected' : '' }}>Decrescente
                                        </option>
                                    </select>
                                </div>
                                <button
                                    class="px-3 self-end h-[42px] bg-primary border-2 border-zinc-500 border-solid rounded-sm"><x-zondicon-search
                                        width="18" /></button>
                            </form>
                        </div>
                        <a href="{{ route('admin.add-movie-page') }}"><x-ri-add-fill width='60' /></a>
                    </div>

                    @if (!isset($movies) || sizeof($movies) == 0)
                        <p>Parece que você não possui filmes cadastrados.</p>
                    @else
                        <div class="h-[2px] w-[95%] bg-white mx-auto my-10"></div>
                        @foreach ($movies as $movie)
                            <form action="{{ route('admin.update-or-delete-movie', $movie->id) }}" method="post">
                                @csrf
                                <ul class="grid grid-cols-2 gap-y-4 gap-x-6">
                                    <li class="flex items-start flex-col gap-2 w-full">
                                        <label for="title" class="py-1">Titulo:</label>
                                        <input type="text" name="title"
                                            class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm"
                                            id="title" value="{{ $movie->title }}">
                                    </li>
                                    <li class="flex items-start flex-col gap-2 w-full">
                                        <label for="duration" class="py-1">Duração:</label>
                                        <input name="duration"
                                            class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm"
                                            type="time" id="duration" value="{{ substr($movie->duration, 0, -3) }}">
                                    </li>
                                    <li class="flex items-start flex-col gap-2 w-full">
                                        <label for="category" class="py-1">Categoria:</label>
                                        <select name="category" required
                                            class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm"
                                            type="text" id="category">
                                            <option value="{{ $movie->category }}">{{ $movie->category }}</option>
                                            <option value="Ação">Ação </option>
                                            <option value="Aventura">Aventura</option>
                                            <option value="Comédia">Comédia</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Romance">Romance</option>
                                            <option value="Terror">Terror</option>
                                        </select>
                                    </li>
                                    <li class="flex items-start flex-col gap-2 w-full">
                                        <label for="banner" class="py-1">banner Link:</label>
                                        <input name="banner_link"
                                            class="bg-primary w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm"
                                            type="text" id="banner" value="{{ $movie->banner_link }}">
                                    </li>
                                    <li class="flex items-start flex-col gap-2 w-full">
                                        <label for="video" class="py-1">Video Link:</label>
                                        <input name="video_link"
                                            class="bg-primary border-2 border-zinc-500 border-solid w-full py-1 px-2 rounded-sm"
                                            type="text" id="video" value="{{ $movie->video_link }}">
                                    </li>
                                    <li class="flex items-start flex-col gap-2 w-full">
                                        <label for="subtitles" class="py-1">legenda Link:</label>
                                        <input name="subtitles_link" max="100"
                                            class="bg-primary border-2 border-zinc-500 border-solid w-full py-1 px-2 rounded-sm"
                                            type="text" id="subtitles" value="{{ $movie->subtitles_link }}">
                                    </li>
                                    <li class="flex items-start flex-col gap-2 w-full col-span-2">
                                        <label for="desc" class="py-1">Descrição:</label>
                                        <textarea rows="4" name="description"
                                            class="bg-primary resize-y w-full py-1 border-2 border-zinc-500 border-solid px-2 rounded-sm" id="desc">
                                        {{ $movie->description }}
                                    </textarea>
                                    </li>
                                    <li class="flex justify-end gap-4 col-span-2">
                                        <button name="action" value="edit"
                                            class="bg-primary px-8 py-1 rounded-md border-2 border-green-500 hover:brightness-75 border-solid alert-trigger"
                                            data-title="Tem certeza?"
                                            data-description="A edição não poderá ser desfeita">Editar</button>
                                        <button name="action" value="remove"
                                            class="bg-primary px-8 py-1 rounded-md border-2 border-red-500 hover:brightness-75 border-solid alert-trigger"
                                            data-title="Tem certeza?"
                                            data-description="A remoção não poderá ser desfeita">Remover</button>
                                    </li>

                                </ul>
                            </form>
                            @if (!$loop->last)
                                <div class="h-[2px] w-[95%] bg-white mx-auto my-10"></div>
                            @endif
                        @endforeach
                    @endif
                </article>
            </div>
        </section>
    </main>
@endsection
