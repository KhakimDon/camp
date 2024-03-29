<template>
  <swiper
    :slidesPerView="'auto'"
    :spaceBetween="30"
    :navigation="true"
    :freeMode="true"
    :modules="modules"
    class="mySwiper"
  >
  <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
          <img class="h-[100%] w-[100%] object-covers" src="src/assets/15.jpg" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
          <img class="h-[100%] w-[100%] object-covers" src="src/assets/16.jpg" alt="">
        </div>
    </swiper-slide>
    <swiper-slide class="swiper-slide">
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
            <img class="h-[100%] w-[100%] object-covers" src="src/assets/12.jpg" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
          <img class="h-[100%] w-[100%] object-covers" src="src/assets/13.jpg" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
          <img class="h-[100%] w-[100%] object-covers" src="src/assets/14.jpg" alt="">
        </div>
    </swiper-slide>
 
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
          <img class="h-[100%] w-[100%] object-covers" src="src/assets/17.jpg" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
          <img class="h-[100%] w-[100%] object-covers" src="src/assets/18.jpg" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
          <img class="h-[100%] w-[100%] object-covers" src="src/assets/19.jpg" alt="">
        </div>
    </swiper-slide>


  </swiper>
</template>
  <script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import 'swiper/css/navigation';
import "swiper/css/pagination";
import 'swiper/css/free-mode';

import { Navigation } from 'swiper';


import "../assets/swiper.css";

// import required modules
import { FreeMode, Pagination } from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Pagination,FreeMode,Navigation],
    };
  },
  mounted(){
    document.querySelector(".swiper-button-prev").innerHTML += `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
</svg>
`
    document.querySelector(".swiper-button-next ").innerHTML += `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
</svg>
`
  }
};
</script>
  