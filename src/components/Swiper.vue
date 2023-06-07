<template>
  <swiper
    :slidesPerView="'auto'"
    :spaceBetween="30"
    :navigation="true"
    :freeMode="true"
    :modules="modules"
    class="mySwiper"
  >
    <swiper-slide class="swiper-slide">
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[gray]">
            <img class="h-[100%] w-[100%] object-covers" src="https://images.unsplash.com/photo-1594608661623-aa0bd3a69d98?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=948&q=80" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[yellow]">
                <img class="h-[100%] w-[100%] object-covers" src="https://images.unsplash.com/photo-1471115853179-bb1d604434e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[yellow]">
            <img class="h-[100%] w-[100%] object-covers" src="https://images.unsplash.com/photo-1525811902-f2342640856e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[yellow]">
            <img class="h-[100%] w-[100%] object-covers" src="https://images.unsplash.com/photo-1492648272180-61e45a8d98a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="">
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="h-[100%] w-[100%] overflow-hidden rounded-[35px] bg-[yellow]">
            <img class="h-[100%] w-[100%] object-covers" src="https://images.unsplash.com/photo-1594495894542-a46cc73e081a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="">
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
  