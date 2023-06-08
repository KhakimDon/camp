<!-- <script setup>

let burger = false
// import TheWelcome from '../components/TheWelcome.vue'
</script> -->

<template>
  <main>

    <!-- шапка  -->
    <Header />

    <!-- Первый блок -->
    <FirstScreen suptitle="exsplore the world" title="Explore The Natural Beauty Of Halmahera With Us 🏝" subtitle="explore the beauty of god's earth in a beautiful forest and have fun" button="Exsplore Now 🔥"/>
    
    <!-- Второй блок -->
    <SecondScreen/>

    <!-- Третий блок -->
    <FourthScreen/>
    
    <!-- Третий блок -->
    <ThirdScreen class="mb-[100px]"/>

  </main>
</template>

<script>
  import FirstScreen from '../components/FirstScreen.vue';
import FourthScreen from '../components/FourthScreen.vue';
  import Header from '../components/Header.vue';
  import SecondScreen from '../components/SecondScreen.vue';
import ThirdScreen from '../components/ThirdScreen.vue';
  export default{
  data(){
    return{
      burger: false
    }
  },
  components:{
    FirstScreen,
    Header,
    SecondScreen,
    ThirdScreen,
    FourthScreen
}
}
</script>

,
    ThirdScreen