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



  </main>
</template>

<script>
  import FirstScreen from '../components/FirstScreen.vue';
  import Header from '../components/Header.vue';
  export default{
  data(){
    return{
      burger: false
    }
  },
  components:{
    FirstScreen,
    Header
  }
}
</script>

