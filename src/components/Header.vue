<template>
  <header
    :class="{ fixBurger: this.fixBurger && this.burger == false }"
    class="duration-[0.3s] py-[44px] w-[100%] max-w-[1920px] l-0 fixed top-0 z-[99]"
  >
    <div class="container 1440:w-[1200px] max-w-[1500px] mx-[auto] h-[100%]">
      <div class="flex items-center justify-between">
        <span
          class="text-white 666:hidden font-[700] text-[20px] font-[poppins] 666:text-[13px] ml-[10px]"
          >
          <img class="h-[65px]" src="../assets/camperlogo.png" alt="camplogo">
        </span>
        <img class="h-[50px] 666:block hidden" src="../assets/camperlogo.png" alt="camperlogo">
        <nav>
          <a :class="{t: this.fixBurger}"
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[Montserrat] font-[500]"
            href="#"
            >Главная </a  
          >
          <a :class="{t: this.fixBurger}"
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[Montserrat] font-[500]"
            href="#fun"
            >Наше веселье</a
          >
          <a :class="{t: this.fixBurger}"
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[Montserrat] font-[500]"
            href="#get"
            >Вы получите  </a
          >
          <a :class="{t: this.fixBurger}"
            class="mx-[20px] 1024:hidden text-white hover:text-[orangered] duration-[.3s] font-[Montserrat] font-[500]"
            href="#contacts"
            >Контакты</a
          >
        </nav>
        <div class="flex items-center">
          <a  :class="{t: this.fixBurger}"
            href="tel:998977430537"
            class="text-[15px] text-white font-[500] 666:hidden"
            >+998(97) 743-05-37</a
          >
          <a href="#write">
          <button
            class="yg px-[44px] py-[13px] rounded-[20px] text-white font-[600] ml-[22px] 666:px-[20px] 666:py-[8px] 666:text-[13px]"
          >
            Написать нам
          </button>
          </a>
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
    <div :class="{ burgerActive: this.burger }" class="burger p-[30px]">
      <ul class="flex flex-col items-end">
        <li
          @click="this.burger = false"
          class="text-[orangered] bg-white rounded-[100%] p-[10px] mt-[20px] mb-[30px]"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-[20px] h-[20px]"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3"
            />
          </svg>
        </li>
        <li 
          class="text-white my-[10px] yg text-[14px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center"
        >
          <a href="#home">Главная</a>
        </li>
        <li
          class="text-white my-[10px] yg text-[14px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center"
        >
        
        <a href="#fun">Наше веселье</a>
        </li>
        <li
          class="text-white my-[10px] yg text-[14px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center"
        >
        
        <a href="#get">Вы получите </a>
        </li>
        <li
          class="text-white my-[10px] yg text-[14px] px-[10px] py-[2px] w-[120px] rounded-[10px] flex justify-center"
        >
        
        <a href="#contacts  ">Контакты</a>

        </li>
    
      </ul>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      burger: false,
      fixBurger: false,
    };
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  unmounted() {
    window.removeEventListener("scroll", this.handleScroll);
  },
  methods: {
    handleScroll(event) {
      scrollY > 35 ? (this.fixBurger = true)  : (this.fixBurger = false);
    },
  },
};
</script>

<style scoped>
.fixBurger {
  background: #28553E;
  padding: 20px 0px;
}
.fixBurger span {
  color: black;
}
.fixBurger svg {
  color: black;
}
.burger {
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
  transition-duration: 0.5s;
}
.t{
  color: white !important;
}
.burgerActive {
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