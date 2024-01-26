
@extends('layouts/app')

@section('content')
<main>
    <section class="h-[100vh] pt-[50px] bg-primary flex justify-center items-center">
        <article class="container relative bg-zinc-700 text-white h-[700px] max-h-[80%] rounded-[40px] py-10 px-32 flex justify-between items-center">
            <div class="w-[40%] flex flex-col gap-10">
                <h1 class="text-3xl font-bold">Cadastro</h1>
                <p class="text-xl">Crie uma conta para poder fazer login e assistir seus conteúdos favoritos</p>
            </div>
            <form action="{{route('register-user')}}" method="post" class="w-[40%] flex flex-col items-start text-base">
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
    </section>
</main>
@endsection

