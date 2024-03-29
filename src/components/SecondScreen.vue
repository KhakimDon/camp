<template>
    <div class="min-h-[456px] 666:max-h-[820px]  1200:h-[1000px]  py-[100px] flex justify-between mx-auto 1200:w-[90%] 1200:relative 1200:max-w-[95%] 1440:w-[1200px] max-w-[1500px]">
        <div class="mr-[50px]">
            <span class="text-[#0F1F1C] font-[Montserrat ] font-[700] text-[30px]">Из 2023 </span>
            <h2 class="666:text-[30px] font-[Montserrat] mb-[15px] text-[#0F1F1C] text-[55px] font-[700]">Наше веселье</h2>
            <p class="666:text-[20px] text-[#838A89] mb-[60px] 666:mb-[20px] font-[600] text-[25px] font-[Montserrat] max-w-[456px]">Игры, купание, обучение, костёр и вечеринки - "All-Inclusive"</p>
            <a href="#write">
                <button class="666:text-[18px] 666:px-[20px] 666:py-[15px] 666:rounded-[20px] yg py-[25px] px-[45px] rounded-[27px] font-[poppins] text-white font-[600] text-[20px]">Погнали 🔥</button>
            </a>
        </div>
        <div class="absolute w-[50%] 1200:bottom-0 1200:left-[50%] 1200:translate-x-[-50%] 1200:w-[100%] right-0 flex-1 flex items-centers">
            <Swiper/>
        </div>
    </div>
</template>

<script>
import Swiper from '../components/Swiper.vue'
export default {
    components:{
        Swiper,
    }
}
</script>

<style>

</style>