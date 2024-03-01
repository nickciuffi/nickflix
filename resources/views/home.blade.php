
@extends('layouts/app')

@section('content')
<main class="bg-primary pt-[50px] text-white ">
    <section class="min-h-[calc(100vh-50px)] flex items-center bg-gradient-to-br from-primary via-[#2a2a31] to-[#636369]">
        <figure class="container mx-auto py-10 flex items-center gap-6">
            <figcaption class="w-[40%]">
                <h1 class="text-3xl mb-8">
                    Bem Vindo(a) ao NickFlix
                </h1>
                <p class="text-xl">Este é um projeto feito por Nicolas Ciuffi, como forma de estudo no framework Laravel PHP.</p>
                <p class="text-xl">O projeto consiste em uma simulação de um sistema de streaming de filmes.</p>
                <p class="text-xl">Nenhum filme "pirata" foi utilizado neste projeto, já que ele consiste apenas em uma simulação para estudo.</p>
            </figcaption>
            <img class="w-[60%] rotate-[-10deg]" src="{{asset('images/home/welcome.png')}}" alt="">
        </figure>
    </section>
    <section class="border-t-4 border-zinc-500 border-solid">
        <div class="container mx-auto flex items-center justify-between gap-20 py-20 ">
            <div class="w-[40%]">
            <h2 class="text-3xl mb-8">Como Usar o App?</h2>
            <p class="text-2xl">Para acessar os filmes, primeiramente é necessário acessar sua conta:</p>
            </div>
            <div class="flex flex-col w-min justify-center items-stretch gap-20 py-20">
                <a href="{{route('login')}}" class="bg-primary px-8 py-6 rounded-md border-4 hover:scale-105 transition-all border-solid text-center border-zinc-500 text-2xl">Entrar</a>
                <a href="{{route('register')}}" class="bg-primary px-8 py-6 rounded-md border-4 hover:scale-105 transition-all border-solid  border-zinc-500 text-2xl">Registrar</a>
            </div>
        </div>
    </section>
</main>
@endsection
