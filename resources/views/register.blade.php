
@extends('layouts/app')

@section('content')
<main class="bg-primary relative z-10">
    <section class="min-h-[100vh] pt-[100px] pb-[50px] flex justify-center items-center">
           <article class="container bg-zinc-700 px-16 tablet:px-8 text-white max-h-[80%] rounded-[40px] w-[90%] relative py-24 flex justify-between items-center tablet:gap-20 tablet:flex-col tablet:justify-center">
                <div class="w-[40%] tablet:w-full flex flex-col gap-10">
                    <h1 class="text-3xl font-bold">Cadastro</h1>
                    <p class="text-xl max-w-[400px]">Cadastre uma conta para poder assistir seus conteúdos favoritos.</p>
                </div>
                <form action="{{route('register-user')}}" method="post" class="w-[40%] flex flex-col items-start text-base tablet:w-full">
                    @csrf
                    <label class="mb-1" for="name">Nome:</label>
                    <input required class="mb-6 py-2 px-4 rounded-md w-full bg-primary " type="text" minlength="3" id="name" name="name" placeholder="Ex: Marcos Leonardo" />
                    <label class="mb-1" for="email">Email:</label>
                    <input required class="mb-6 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" type="email" name='email' id="email" placeholder="Ex: marcos@gmail.com" />
                    <label class="mb-1" for="password">Senha:</label>
                    <input required class="mb-6 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" minlength="6" maxlength="20" type="password" name="password" id="password" placeholder="Ex: marcox123@" />
                    <div class="w-full flex items-center justify-between">
                        <button type="submit" class="bg-primary py-2 px-6 rounded-md">Entrar</button>
                        <a href="{{route('login')}}" class="hover:brightness-75 text-end">Já possui uma conta?</a>
                    </div>
                </form>
            </article>
    </section>
</main>
@endsection




