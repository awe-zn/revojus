$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 32,
    nav: false,
    loop: true,
    autoplayTimeout: 10000,
    responsive: {
      0: {
        items: 1,
        autoplay: true,
      },
      768: {
        items: 2,
        autoplay: true,
      },
      1200: {
        items: 3,
        dots: false,
        mouseDrag: false,
        merge: false,
        margin: 80,
        autoplay: false,
        touchDrag: false,
      },
      1400: {
        margin: 112,
        autoplay: false,
        mouseDrag: false,
        touchDrag: false,
      }
    },
  });
});
