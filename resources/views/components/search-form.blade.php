<form action={{ route('search') }} method="get" class="container mx-auto">
    <h2 for="" class="mb-4 text-xl">Pesquisar</h2>
    <div class="flex items-stretch justify-center gap-2 ">
        <input type="text" name="searchText"
            class="bg-zinc-500 rounded-md focus-visible:ring-0 focus-within:ring-0 focus:ring-0 py-1 px-2 w-[calc(100%-(32px+0.5rem))]" />
        <button class="bg-zinc-500 rounded-md aspect-square h-[32px] flex justify-center items-center">
            <x-zondicon-search width="16" />
        </button>
    </div>
</form>
