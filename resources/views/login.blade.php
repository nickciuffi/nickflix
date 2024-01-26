
@extends('layouts/app')

@section('content')
<main>
    <section class="h-[100vh] pt-[50px] bg-primary flex justify-center items-center">
        <article class="container relative bg-zinc-700 text-white h-[700px] max-h-[80%] rounded-[40px] py-10 px-32 flex justify-between items-center">
            <div class="w-[40%] flex flex-col gap-10">
                <h1 class="text-3xl font-bold">Login</h1>
                <p class="text-xl">Entre em sua conta para poder assistir seus filmes e séries.</p>
            </div>
            <form action="{{route('login-user')}}" method="post" class="w-[40%] flex flex-col items-start text-base">
                @csrf
                <label class="mb-1" for="email">Email:</label>
                <input required class="mb-6 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" type="email" id="email" name="email" placeholder="Ex: marcos@gmail.com" />
                <label class="mb-1" for="password">Senha:</label>
                <input required class="mb-3 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" type="password" id="password" name="password" placeholder="Ex: marcox123@" />
                <div class="w-full flex items-end justify-between">
                    <button class="bg-primary py-2 px-6 rounded-md">Entrar</button>
                    <a href="{{route('register')}}" class="hover:brightness-75">Não possui uma conta?</a>
                </div>
            </form>
        </article>
    </section>
</main>
@endsection
