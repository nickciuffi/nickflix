
@extends('layouts/app')

@section('content')
<main class="bg-primary pt-[50px] text-white bg-gradient-to-br from-primary via-[#2f2f35] to-[#85858a]">
    <section class="min-h-[calc(100vh-50px)] flex items-center">
        <figure class="container mx-auto py-10 flex items-center gap-4">
            <figcaption class="w-[40%]">
                <h1 class="text-3xl mb-8">
                    Bem Vindo(a) ao NickFlix
                </h1>
                <p class="text-2xl">Este é um projeto feito por Nicolas Ciuffi, como forma de estudo no framework Laravel PHP.</p>
                <p class="text-2xl">O projeto consiste em um sistema de streaming de filmes</p>
            </figcaption>
            <img class="w-[60%] rotate-[-10deg]" src="{{asset('images/home/welcome.png')}}" alt="">
        </figure>
    </section>
    <section>
        <div class="container mx-auto">
            <h2 class="text-3xl mb-8">Como Usar o App?</h2>
            <p class="text-2xl">Para acessar os filmes, primeiramente é necessário acessar sua conta:</p>
            <div class="">
                <button>Entrar</button>
                <button>Registrar</button>
            </div>
        </div>
    </section>
</main>
@endsection
