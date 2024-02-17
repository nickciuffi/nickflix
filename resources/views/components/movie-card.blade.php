<a href={{ route('movie', $id) }} style="background-image: url('{{ $bannerLink }}')"
    class="aspect-[9/16] rounded-md bg-cover bg-center !flex flex-col justify-end p-6 swiper-slide relative">
    <h3 class="text-center relative min-h-[56px] z-40 mb-2 font-bold text-lg">{{ $title }}
    </h3>
    <div class="absolute bottom-0 left-0 w-full h-[300px] bg-gradient-to-b from-transparent via-black/75 to-black">
    </div>
</a>
