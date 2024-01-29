

@extends('layouts/app')

@section('content')
<main class="bg-primary relative z-10">
    <section class="min-h-[100vh] pt-[100px] flex justify-center items-center">
        <div class="bg-zinc-700 text-white min-h-[700px] rounded-[40px] w-[95%] flex justify-center items-center">
            <article class="container relative py-20 flex justify-between items-center tablet:gap-20 tablet:flex-col">
                <div class="w-[40%] tablet:w-full flex flex-col gap-10">
                    <h1 class="text-3xl font-bold">Login</h1>
                    <p class="text-xl max-w-[400px]">Entre em sua conta para poder assistir seus filmes e séries.</p>
                </div>
                <form action="{{route('login-user')}}" method="post" class="w-[40%] flex flex-col items-start text-base tablet:w-full">
                    @csrf
                    <label class="mb-1" for="name">Nome:</label>
                    <input class="mb-6 py-2 px-4 rounded-md w-full bg-primary " type="text" minlength="3" id="name" name="name" placeholder="Ex: Marcos Leonardo" />
                    <label class="mb-1" for="email">Email:</label>
                    <input class="mb-6 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" type="email" name='email' id="email" placeholder="Ex: marcos@gmail.com" />
                    <label class="mb-1" for="password">Senha:</label>
                    <input class="mb-6 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" minlength="6" maxlength="20" type="password" name="password" id="password" placeholder="Ex: marcox123@" />
                    <div class="w-full flex items-center justify-between">
                        <button type="submit" class="bg-primary py-2 px-6 rounded-md">Entrar</button>
                        <a href="{{route('login')}}" class="hover:brightness-75">Já possui uma conta?</a>
                    </div>
                </form>
            </article>
        </div>
    </section>
</main>
@endsection
