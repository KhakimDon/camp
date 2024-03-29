<!-- <script setup>

let burger = false
// import TheWelcome from '../components/TheWelcome.vue'
</script> -->
<!-- mrdoniyor_camp -->
<template>
  <main class="max-w-[2000px] mx-auto">
    <!-- шапка  -->
    <Header />

    <!-- Первый блок -->
    <FirstScreen
      id="home"
      title=" Здесь три месяца длятся каникулы летом,
Забудь про учебу смелее. 🏝"
      subtitle="Вместе с «Mr.Doniyor's Camp» "
      button="Поехали 🔥"
    />  

    <!-- Второй блок -->
    <SecondScreen id="fun" />

    <!-- Третий блок -->
    <FourthScreen  />  

    <!-- Третий блок -->
    <ThirdScreen class="mb-[100px]" />

    <!-- Форма -->
    <Form />
    
    <!-- Четверный блок -->
    <Sponsors />

  </main>
</template>


<script>
import FirstScreen from "../components/FirstScreen.vue";
import Form from "../components/Form.vue";
import FourthScreen from "../components/FourthScreen.vue";
import Header from "../components/Header.vue";
import SecondScreen from "../components/SecondScreen.vue";
import Sponsors from "../components/Sponsors.vue";
import ThirdScreen from "../components/ThirdScreen.vue";
export default {
  data() {
    return {
      burger: false,
    };
  },
  components: {
    FirstScreen,
    Header,
    SecondScreen,
    ThirdScreen,
    FourthScreen,
    Sponsors,
    Form,
  },
};
</script>
