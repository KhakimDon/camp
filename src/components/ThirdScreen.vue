<template>
  <h1
    class="text-[45px] mb-[30px] mt-[170px] w-[100%] text-center  font-[Montserrat] font-[700] mb-[20px] 666:text-[28px] 666:font-[600]">
    Счастливые кадры :)</h1>

    <div class="happy-moments-container">
      <video  muted autoplay loop class="h-[100%] video1" src="../assets/movie1.MOV"></video>
      <div class="happy-wrapper">
        <figure class="w-[100%] h-[50%]">
          <img src="../assets/movie2.jpg" alt="image">
        </figure>
        <video autoplay muted loop class="video2" src="../assets/movie3.MOV"></video>
      </div>
      <video autoplay muted loop class="video3" src="../assets/movie4.MOV"></video>
    </div>

</template>

<script>
export default {};
</script>

<style scoped>
.happy-moments-container{
  display: flex;
  height: 600px;
  justify-content: center;
  gap: 5px;
  max-width: 1500px;  
  margin: auto;
}
.video1{
  border-radius: 20px 0 0 20px;
}
.video2{
  height: 50%;
  width: 100%;
  object-fit: cover;
}
.happy-wrapper{
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 5px;
}
.happy-wrapper img{
  height: 100%;
  width: 100%;
  object-fit: cover !important;
}
.video3{
  border-radius: 0 20px 20px 0;
}
</style>