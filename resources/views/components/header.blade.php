<?php

use App\Http\Controllers\UserController;

?>

<header
    class="w-full fixed top-0 left-0 min-h-[50px] flex items-center justify-center bg-zinc-800 text-white text-base z-20 shadow-xl">
    <nav class="container flex ">
        <ul class="flex justify-start items-center gap-10 tablet:gap-4">
            <li>
                <a href="{{ route('home') }}" class="text-xl font-bold">Nickflix</a>
            </li>
            @if (UserController::isLogged())
                {{-- <li>
                    <a href="{{ route('filmes') }}" class="font-bold">Filmes</a>
                </li> --}}
                {{--
                    Ainda não disponivel
                    <li>
                    <a href="{{ route('list') }}" class="font-bold">Minha lista</a>
                </li> --}}
            @endif
        </ul>
        <ul class="flex justify-start items-center gap-10 ml-auto">
            @if (UserController::isLogged())
                <li class="relative">
                    <button id="user-dropdown-activator"
                        class="cursor-pointer font-bold">{{ ucfirst(session('userName')) }}</button>
                    <div id="user-dropdown"
                        class="absolute py-4 px-6 bg-secondary shadow-md rounded-md border-solid border-2 border-zinc-300 translate-x-[-50%] left-1/2 top-[30px] hidden">
                        <ul class="whitespace-nowrap flex flex-col gap-4">
                            <li class="flex justify-center">
                                <a href="{{ route('logout-user') }}">Sair</a>
                            </li>
                            @if (session('userIsAdmin'))
                                <li class="flex justify-center">
                                    <a href="{{ route('admin.filmes') }}">Gerenciar filmes</a>
                                </li>
                                <li class="flex justify-center">
                                    <a href="{{ route('admin.admins') }}">Gerenciar admins</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" class="font-bold">Entrar</a>
                </li>
            @endif
        </ul>
    </nav>
</header>
