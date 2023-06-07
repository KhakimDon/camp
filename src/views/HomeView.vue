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


    <SecondScreen/>
  <h1><a href="https://www.figma.com/file/kZM2thsEUVNrn97E4beuKt/Untitled-(Copy)?type=design&node-id=1-3&t=hGxF9g0VofjgaN6r-0">YA TUT</a></h1>
  </main>
</template>

<script>
  import FirstScreen from '../components/FirstScreen.vue';
  import Header from '../components/Header.vue';
  import SecondScreen from '../components/SecondScreen.vue';
  export default{
  data(){
    return{
      burger: false
    }
  },
  components:{
    FirstScreen,
    Header,
    SecondScreen
  }
}
</script>

