<template>
  <div
    class="b h-[400px] rounded-[40px] flex flex-col justify-center items-center p-[40px] w-[600px] fixed left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] z-[9999]"
  >
    <div class="bg-[#da4942] mb-[20px] w-[90px] h-[90px] relative flex items-center justify-center rounded-[50%]">
        <svg
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="h-[60px] absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] w-[60px] text-[white]"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"
      />
    </svg>
    </div>
    <span class="text-center text-[25px] font-[poppins] "
      >Request sent successfully. During the day, Swami will be contacted</span
    >
    <button @click="this.$emit('closeResponse')" class="yg mt-[20px] w-[100%] py-[13px] rounded-[20px] text-[white] text-[20px]">OKEY NICE !</button>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.b {
    transform: translate(-50%,-60%);
    pointer-events: none;
    transition-duration: .5s;
    opacity: 0%;
  backdrop-filter: blur(19px);
  background: rgba(255, 255, 255, 0.55);
  box-shadow: 0 20px 40px 10px rgba(86, 86, 86, 0.29), 0 0 150px 120px rgba(255, 255, 255, 0.582);
}
</style>