const swiper = new Swiper(".movies-swiper", {
    // Optional parameters
    direction: "horizontal",
    slidesPerView: 2,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,

    breakpoints: {
        1024: {
            slidesPerView: 4,
        },
    },
    // Navigation arrows
    navigation: {
        nextEl: "#swiper-btn-next",
        prevEl: "#swiper-btn-prev",
    },
});
