const swiper1 = new Swiper(".movies-swiper-1", {
    // Optional parameters
    direction: "horizontal",
    slidesPerView: 2,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    keyboard: {
        enabled: true,
    },

    breakpoints: {
        1024: {
            slidesPerView: 4,
        },
        640: {
            slidesPerView: 3,
        },
    },
    // Navigation arrows
    navigation: {
        nextEl: "#swiper-btn-next-1",
        prevEl: "#swiper-btn-prev-1",
    },
});

const swiper2 = new Swiper(".movies-swiper-2", {
    // Optional parameters
    direction: "horizontal",
    slidesPerView: 2,
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    keyboard: {
        enabled: true,
    },

    breakpoints: {
        1024: {
            slidesPerView: 4,
        },
        640: {
            slidesPerView: 3,
        },
    },
    // Navigation arrows
    navigation: {
        nextEl: "#swiper-btn-next-2",
        prevEl: "#swiper-btn-prev-2",
    },
});
