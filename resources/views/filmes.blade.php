@extends('layouts/app')

@section('content')
    <main class="bg-secondary text-white min-h-[100vh]">
        <section class="pt-[100px] pb-10">
            <div class="container mx-auto overflow-visible">
                <h2 class="mb-4 text-xl">Ordem Alfabética</h2>
                <div class="movies-swiper swiper overflow-visible relative rounded-md">

                    <div class="swiper-wrapper cursor-pointer overflow-visible">
                        @foreach ($filmes as $filme)
                            <div style="background-image: url('{{ $filme->banner_link }}')"
                                class="aspect-[9/16] rounded-md bg-cover bg-center !flex flex-col justify-end p-6 swiper-slide relative">
                                <h3 class="text-center relative min-h-[56px] z-40 mb-2 font-bold text-xl">{{ $filme->title }}
                                </h3>
                                <div
                                    class="absolute bottom-0 left-0 w-full h-[300px] bg-gradient-to-b from-transparent via-black/75 to-black">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="absolute z-40 top-0 left-0 pl-2 w-[calc((100%/8)-10px)] mobile:w-[calc((100%/4)-10px)] flex flex-col justify-center inset-0 bg-gradient-to-l from-transparent via-black/75 to-black"
                        id="swiper-btn-prev">
                        <x-grommet-next class="w-12 h-12 rotate-180" />
                    </div>
                    <div id="swiper-btn-next"
                        class="absolute left-auto z-40 top-0 right-0 pr-2 w-[calc((100%/8)-10px)] flex flex-col justify-center items-end inset-0 bg-gradient-to-r from-transparent via-black/75 to-black">
                        <x-grommet-next class="w-12 h-12 " />
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
