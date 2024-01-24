
<header class="w-full fixed top-0 left-0 min-h-[45px] flex items-center justify-center bg-zinc-700 text-white text-base">
    <nav class="container flex px-20">
        <ul class="flex justify-start items-center gap-10 ">
            <li>
                <a href="{{route('home')}}">Nickflix</a>
            </li>
            <li>
                <a href="{{route('list')}}">Minha lista</a>
            </li>
            <li>
                <form action="" class="bg-zinc-500 rounded-md pr-2 flex items-center justify-center">
                        <input id="title" type="text" class="bg-transparent overflow-hidden focus-visible:ring-0 focus-within:ring-0 focus:ring-0 py-1 px-2"/>
                        <button><x-zondicon-search width="16" /></button>
                </form>
            </li>
        </ul>
        <ul class="flex justify-start items-center gap-10 ml-auto">
            <li>
                <a href="{{route('login')}}">Entrar</a>
            </li>
        </ul>
    </nav>
</header>
