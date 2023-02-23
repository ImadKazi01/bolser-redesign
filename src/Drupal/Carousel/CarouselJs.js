import Swiper from 'swiper';

export default class StaffCarousel {
  constructor(element) {
    if (!element) return;
    this.instance = new Swiper(element, {
      slidesPerView: 5.5,
      spaceBetween: 30,
      roundLengths: true,
      navigation: {
        nextEl: '.swiper-btn--next',
        prevEl: '.swiper-btn--prev',
        disabledClass: 'swiper-btn--disabled',
      },
      mousewheel: {
        invert: true,
        forceToAxis: true,
        releaseOnEdges: true,
      },
      breakpointsInverse: true,
      breakpoints: {
        1440: {
          slidesPerView: 5.5,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4.5,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 2.5,
          spaceBetween: 15,
        },
        0: {
          slidesPerView: 1.5,
          spaceBetween: 15,
        },
      },
    });
  }
}
