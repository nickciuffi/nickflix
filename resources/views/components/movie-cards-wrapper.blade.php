<div class="relative tablet:px-14 mobile:px-0 tablet:-mx-6 mobile:mx-0">
    <div class="{{ 'movies-swiper-' . $number . ' swiper relative rounded-md' }}">

        <div class="swiper-wrapper cursor-pointer overflow-visible">

            @foreach ($movies as $movie)
                @include('components.movie-card', [
                    'bannerLink' => $movie->banner_link,
                    'title' => $movie->title,
                    'id' => $movie->id,
                ])
            @endforeach

        </div>

    </div>
    <div class="absolute z-40 top-0 left-0 pl-2 tablet:pl-0 mobile:pl-2 w-[calc((100%/8)-10px)] tablet:w-14 mobile:w-[calc((100%/4)-10px)] flex flex-col justify-center inset-0 tablet:via-transparent tablet:to-transparent mobile:via-black/75 mobile:to-black bg-gradient-to-l from-transparent via-black/75 to-black"
        id="{{ 'swiper-btn-prev-' . $number }}">
        <x-grommet-next class="w-12 h-12 rotate-180" />
    </div>
    <div id="{{ 'swiper-btn-next-' . $number }}"
        class="absolute left-auto z-40 top-0 right-0 pr-2 tablet:pr-0 mobile:pr-2 w-[calc((100%/8)-10px)] tablet:w-14 mobile:w-[calc((100%/4)-10px)] flex flex-col justify-center items-end inset-0 tablet:via-transparent tablet:to-transparent mobile:via-black/75 mobile:to-black bg-gradient-to-r from-transparent via-black/75 to-black">
        <x-grommet-next class="w-12 h-12 " />
    </div>

</div>
