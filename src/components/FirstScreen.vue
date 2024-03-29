<template>
  <section class="gradient overflow-hidden 666:h-[800px] h-[100vh] max-h-[1000px] w-[100%] relative">
    <img class="bg-image 1440:h-[50%] 1440:right-[150px]  right-[200px] h-[70%]" src="../assets/icons/logo.png" alt="logo">
    <div
      class="max-w-[1500px] 666:max-h-[650px]  1024:items-center container 1440:w-[1200px] mx-[auto] 1024:h-[850px] h-[100%] flex justify-center items-start flex-col"
    >
      <a href="https://www.instagram.com/mrdoniyor_camp/"
        class="block bg-[#648E76] 666:text-[12px] flex text-white font-[poppins] text-[18px] w-[max-content] px-[15px] py-[11px] rounded-[15px]"
      >
        <img class="h-[26px] mr-[5px]" src="../assets/instagram.png" alt="insta"> Mrdoniyors_camp
  </a>
      <h1
        class="text-white mt-[7px] 666:text-[30px]  1024:text-center 1024:max-w-[90%] font-[Montserrat] text-[50px] max-w-[750px] font-[1000]"
      >
        {{ title }} 
      </h1>
      <p class="text-[#93A79D] font-[Montserrat] mt-[30px] 666:text-[20px] 666:w-[100%]  1024:text-center text-[25px] font-[500] w-[519px]">
        {{ subtitle }}
      </p>
      <a href="#write"
        class="yg rounded-[27px] text-white mt-[68px] 666:px-[35px] 666:py-[20px] 666:mt-[30px]  666:text-[3s0px]  text-[25px] font-[600] px-[47px] py-[27px]"
      >
        {{ button }}
    </a>
    </div>
  </section>
</template>

<script setup>  

defineProps({
  suptitle: String,
  title: String,
  subtitle: String,
  button: String,
});
</script>


<script>
export default {};
</script>

<style scoped>
@media screen and (max-width: 1440px) {
  .container{
    width: 95%;
  }
}
@media screen and (max-width: 1024px) {
  .bg-image{
      height: 250px !important;
      transform: translateX(-50%) !important;
      left: 50%;
      position: absolute;
      bottom: 30px !important;
      rotate: 0deg !important;
      animation: none !important;
      top: initial !important;
  }
}
@media screen and (max-width: 666px) {
  .bg-image{
      height: 40vw !important;
      position: absolute;
      transform: translate(0) !important;
      left: -10px !important;
      bottom: 100px !important;
      transform: rotate(25deg) !important;
      top: initial !important;
  }
}
.bg-image{
    position: absolute;
    mix-blend-mode: hard-light;
    rotate: 30deg;
    top: 50%;
    transform: translateY(-50%);
    animation-name: anim;
    animation-duration: 10s;
    animation-iteration-count: infinite;
}

@keyframes anim {
    0%{
        rotate: 0deg;
    }
    50%{
        rotate: 30deg;
    }
    100%{
            rotate: 0deg;
    }
}



.gradient {
  background: linear-gradient(135deg, #387852, #122221);
  clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 50% 100%, 0 90%);
}
</style>