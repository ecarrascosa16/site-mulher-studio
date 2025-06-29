import './bootstrap';
import Alpine from 'alpinejs';

import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import './menu.js';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

  const teamswiper = new Swiper(".mySwiper", {
    modules: [Pagination],
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
      el: ".team-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidePerView: 1,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });

  //Swiper
  const heroSwiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination, Autoplay],
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 3000,
    },
  });
});

