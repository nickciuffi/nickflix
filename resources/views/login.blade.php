@extends('layouts/app')

@section('content')
    <main class="bg-primary relative z-10">
        <section
            class="min-h-[100vh] pt-[100px] tablet:pt-[70px] tablet:pb-[30px] pb-[50px] flex justify-center items-center">
            <article
                class="container bg-secondary px-16 text-white max-h-[80%] rounded-[40px] w-[90%] relative py-32 tablet:py-16 tablet:px-8 flex justify-between items-center tablet:gap-12 tablet:flex-col tablet:justify-center">
                <div class="w-[40%] tablet:w-full flex flex-col gap-10">
                    <h1 class="text-3xl font-bold">Login</h1>
                    <p class="text-xl max-w-[400px]">Entre em sua conta para poder assistir seus filmes e séries.</p>
                </div>
                <form action="{{ route('login-user') }}" method="post"
                    class="w-[40%] flex flex-col items-start text-base tablet:w-full">
                    @csrf
                    <label class="mb-1" for="email">Email:</label>
                    <input required class="mb-6 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" type="email"
                        id="email" name="email" placeholder="Ex: marcos@gmail.com" />
                    <label class="mb-1" for="password">Senha:</label>
                    <input required class="mb-6 py-2 px-4 rounded-md w-full bg-primary focus:ring-0" type="password"
                        id="password" name="password" placeholder="Ex: marcox123@" />
                    <div class="w-full flex items-center justify-between gap-4">
                        <button class="bg-primary py-2 px-6 rounded-md">Entrar</button>
                        <a href="{{ route('register') }}" class="hover:brightness-75 tablet:text-sm">Não possui uma
                            conta?</a>
                    </div>
                </form>
            </article>
        </section>
    </main>
@endsection
