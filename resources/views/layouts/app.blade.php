<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Nickflix</title>
</head>

<body>
    <div id="alert"
        class="fixed transition top-16 left-[50%] min-w-[350px] min-h-[180px] justify-between flex-col bg-secondary text-white rounded-md shadow-black shadow-2xl translate-x-[-50%] px-8 py-6 opacity-0 z-0 flex">
        <div class="flex flex-col gap-2">
            <h2 id="title" class="text-xl">Title</h2>
            <p id="description" class="text-lg">Description</p>
        </div>
        <div class="flex justify-end items-center gap-3">
            <button id="cancel"
                class="bg-white text-primary px-3 py-1 rounded-md hover:brightness-75 border-solid">Cancelar</button>
            <button id="confirm"
                class="bg-primary text-white px-3 py-1 rounded-md  hover:brightness-75 border-solid uppercase">Ok</button>
        </div>
    </div>
    @include('components.header')
    @yield('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                setTimeout(() => {
                    alert('{{ $error }}')
                }, 100);
            </script>
        @endforeach
    @endif
    @if (session('error'))
        <script>
            setTimeout(() => {
                alert('{{ session('error') }}')
            }, 100);
        </script>
    @endif
    @if (session('success'))
        <script>
            setTimeout(() => {
                alert('{{ session('success') }}')
            }, 100);
        </script>
    @endif
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</html>
