<template>
  <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
  <div class="w-[666px] 666:w-[100%] mx-auto">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img
          class="mx-auto h-[140px] w-auto"
          src="../assets/icons/logo.png"
          alt="Your Company"
        />
        <h2
          class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"
        >
          FeedBack
        </h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form @submit.prevent="send()" class="space-y-6" method="POST">
          <div>
            <label
              for="name"
              class="block text-sm font-medium leading-6 text-gray-900"
              >Your name</label
            >
            <div class="mt-2">
              <input
                v-model="username"
                id="name"
                name="user_name"
                type="text"
                placeholder="Doniyor Botirov"
                autocomplete="name"
                required
                class="block 666:h-[60px] 666:text-[20px] text-[30px] px-[20px] h-[80px] w-full rounded-[20px] border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 font-[poppins] font-[500] focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              />
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between">
              <label
                for="password"
                class="block text-sm font-medium leading-6 text-gray-900"
                >Password</label
              >
            </div>
            <div class="mt-2">
              <input
                v-model="usernumber"
                id="password"
                @input="input()"
                placeholder="+998 91 549-17-54"
                name="user_phone"
                type="text"
                autocomplete="current-password"
                required
                class="block 666:h-[60px] 666:text-[20px] h-[80px] w-full rounded-[20px] border-0 py-1.5 px-[20px] text-[30px] font-[poppins] font-[500] text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              />
            </div>
          </div>

          <div>
            <button
              type="submit"
              class="yg 666:text-[25px] 666:h-[65px] flex w-full justify-center rounded-[20px] h-[70px] bg-[#FF584E] px-3 py-1.5 text-[27px] font-semibold font-[poppins] leading-6 items-center text-white hover:bg-[#FF584E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FF584E]"
            >
              Отправить
            </button>
          </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
          Администрация свяжется свами в течении дня.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
 
  data() {
    return {
      username: "",
      usernumber: "",

      // telegram bot config
      token: "6104797248:AAEti3PIansCHmv1kPY_HSki4Q8wq2PJa5c",
      chatId: 768959234,
    };
  },
  methods: {
    send() {
      let fullmessage = `Имя клиента: ${this.username} \n
      
      Телефон номер: ${this.usernumber}`;
      console.log(fullmessage);
      // console.log(this.$http);
      // let a = `https://api.telegram.org/bot${this.token}:AAEti3PIansCHmv1kPY_HSki4Q8wq2PJa5c/sendMessage?chat_id=${this.chatId}&text=${fullmessage}`;

      let api = `https://api.telegram.org/bot6104797248:AAEti3PIansCHmv1kPY_HSki4Q8wq2PJa5c/sendMessage?chat_id=-821000015&text=${fullmessage}`


      this.$http.post(api).then(
        (response) => {
          console.log("Succsessfully!", response.data);
        },
        (error) => {
          console.log(error);
        }
      );
    },
    input() {
      let char = event.target.value[event.target.value.length - 1].charCodeAt();
      if (
        (char >= 48 && char <= 57) ||
        char == 43 ||
        char == 32 ||
        char == 45
      ) {
      } else
        event.target.value = event.target.value.substr(
          0,
          event.target.value.length - 1
        );
    },
  },
};
</script>

<style>
.yg {
  background: linear-gradient(#ff7b4e, #ff584e);
  box-shadow: 0px 8px #da4942;
  transition-duration: 0.3s;
  font-family: "Poppins", sans-serif !important;
}
.yg:hover {
  transform: translateY(8px);
  box-shadow: 0px 0px #da4942;
}
</style>