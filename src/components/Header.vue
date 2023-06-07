<template>
  <header :class="{fixBurger: this.fixBurger && this.burger == false}" class="duration-[0.3s] py-[44px] w-[100%] max-w-[1920px] l-0 fixed top-0 z-[99]">
    <div class="container 1440:w-[1200px] max-w-[1500px] mx-[auto] h-[100%]">
      <div class="flex items-center justify-between">
        <span
          class="text-white font-[700] text-[20px] font-[poppins] 666:text-[13px] ml-[10px]"
          >MR.DONIYOR`S CAMP
        </span>
        <nav>
          <a
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[poppins] font-[500]"
            href="#"
            >Home</a
          >
          <a
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[poppins] font-[500]"
            href="#"
            >Services</a
          >
          <a
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[poppins] font-[500]"
            href="#"
            >Pricing</a
          >
          <a
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[poppins] font-[500]"
            href="#"
            >Contack</a
          >
        </nav>
        <div class="flex items-center">
          <a
            href="tel:998915491754"
            class="text-[15px] text-white font-[500] 666:hidden"
            >+998 (91) 549-17-54</a
          >
          <button
            class="yg px-[44px] py-[13px] rounded-[20px] text-white font-[600] ml-[22px] 666:px-[20px] 666:py-[8px] 666:text-[13px]"
          >
            Написать нам
          </button>
          <button @click="this.burger = true" class="hidden 666:block">
            <svg
              fill="white"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-[32px] ml-[10px] text-white"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div :class="{burgerActive: this.burger}" class="burger p-[30px]">
      <ul class="flex flex-col items-end">
        <li @click="this.burger = false" class="text-[orangered] bg-white rounded-[100%] p-[10px] mt-[20px] mb-[30px]"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] h-[20px]">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
</svg>
</li>
<li class="text-white my-[10px] yg text-[22px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center">Home</li>
<li class="text-white my-[10px] yg text-[22px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center">Services</li>
<li class="text-white my-[10px] yg text-[22px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center">Pricing</li>
<li class="text-white my-[10px] yg text-[22px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center">Contact</li>
<li class="text-white my-[10px] yg text-[12px] px-[10px] py-[2px] rounded-[10px] flex justify-end">call (91) 549-17-54</li>
      </ul>
    </div>
  </header>
</template>

<script>
export default {
  data(){
    return{
      burger: false,
      fixBurger: false,
    }
  },
  created(){
    window.addEventListener('scroll', this.handleScroll);
  },
  unmounted () {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods:{
    handleScroll (event) {
      scrollY > 35? this.fixBurger = true : this.fixBurger = false
      console.log(this.fixBurger);
      
    }
  }
};
</script>

<style scoped>
.fixBurger{
  background: rgba(255, 255, 255, 0.364);
  backdrop-filter: blur(10px);
  padding: 20px 0px;
}
.fixBurger span{
  color: black;
}
.fixBurger svg{
  color: black;
}
.burger{
  height: 100vh;
  width: 100%;
  position: fixed;
  z-index: 99;
  opacity: 10%;
  background: rgba(255, 255, 255, 0.232);
  backdrop-filter: blur(10px);
  pointer-events: none !important;
  right: -100%;
  top: 0;
  clip-path: ellipse(13% 13% at 96% 16%);
  transition-duration: .5s;
}
.burgerActive{
  pointer-events: visible !important;
  opacity: 100% !important;
  right: 0% !important;
  clip-path: ellipse(61% 77% at 100% 0%);
}
@media screen and (max-width: 1440px) {
  .container {
    width: 95%;
  }
}

button {
  font-family: "Poppins", sans-serif !important;
}
</style>