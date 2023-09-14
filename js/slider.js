var swiper1 = new Swiper(".mySwiper", {
    effect: "cube",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    keyboard: {
        enabled: true,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        scrollbar: true,
        draggable: true,
        hide: true,
        enabled: true,
        spaceBetween: 100,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },

    }
  });
var swiper2 = new Swiper(".news-swiper", {

    slidesPerView: 1,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    spaceBetween: 100,
    scrollbar: {
        el: ".news-swiper-scrollbar",
        scrollbar: true,
        draggable: true,
        //hide: true,
        enabled: true,

        dragClass: "news-drag",
        snapOnRelease: true

    },
});

var page1slider = new Swiper(".page1--swiper", {

    pagination: {
        el: ".page1--pagination",
        type: "fraction",
        bulletActiveClass: ".page1active"
    },
    navigation: {
        nextEl: ".line1__icon",
        prevEl: ".line2__icon",
    },
});


var uzBanner = new Swiper(".image-banner__main", {
spaceBetween: 30,
	loop: true,
autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
});
