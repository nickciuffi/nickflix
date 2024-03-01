<div class="movies-swiper swiper overflow-visible relative rounded-md">

    <div class="swiper-wrapper cursor-pointer overflow-visible">

        @foreach ($movies as $movie)
            @include('components.movie-card', [
                'bannerLink' => $movie->banner_link,
                'title' => $movie->title,
                'id' => $movie->id,
            ])
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
