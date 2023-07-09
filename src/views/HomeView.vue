<template>
  <div class="home mx-auto">
    <div id="hero_section" class="h-[600px] w-fit mt-10">
      <div class="">
        <img
          src="../assets/hero.jpg"
          alt=""
          height="300px"
          width="600px"
          class="mt-[0px] transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"
        />
      </div>
      <div id="hero_desc" class="pr-[140px] mt-[150px]">
        <h1 id="hero_text" style="display: grid" class="text-white">
          <span>MID YEAR SALE</span>
          <span>UP TO 70%</span>
          <!-- <span>A BETTER LOOK</span> -->
        </h1>
        <div
          id="promote"
          style="
            margin-left: 200px;
            font-weight: bold;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serif;
          "
          class="text-slate-400"
        >
          <p>Be quick only 100 available products are on sale</p>

          <span style="margin-left: 200px">Grab your favorite Now</span>
        </div>
        <button
          id="shop"
          style="
            margin: 40px 0px;
            border-radius: 10px;
            border: 2px solid none;
            background-color: #f1e1e1;
            font-weight: bold;
            padding: 10px;
            width: 200px;
            height: 50px;
            opacity: ;
          "
        >
          <a> SHOP NOW</a>
        </button>
      </div>
    </div>
  </div>
</template>
<style>
* {
  border-radius: 0;
  margin: 0;
  padding: 0;
}

#hero_section {
  background-color: #3e3a3a;
  /* background-image: url("../assets/hero.jpg"); */
  /* background-size: 100%;
  height: 100vh; */
  display: flex;
  border: 2px solid none;

  border-radius: 10px;
  justify-content: center;
  gap: 200px;
}

#hero_text {
  font-size: 40px;
  margin-right: 60px;
}
#hero_img {
  border-radius: 4px;
  border: 0.4px solid rgb(177, 169, 169);
  width: 500px;
  height: 550px;
  margin: 50px 30px;
}
#trend_section {
  margin-top: 80px;
}
#photo_trend {
  margin: 60px 0;

  display: flex;
  gap: 40px;
  justify-content: center;
}
#product {
  border-radius: 10px;
  border: 4px solid black;
  width: 200px;
  height: 180px;
}
#price {
  color: red;
  font-weight: bold;
}
#priceB_dis {
  opacity: 0.4;
  text-decoration: line-through;
  color: gray;
  padding: 10px;
}
#header-footer {
  font-weight: 600;
  color: rgb(65, 61, 61);
}
</style>

<script>
// @ is an alias to /src
import autoslide from "../components/autoslider.vue";
export default {
  name: "HomeView",
  components: {
    autoslide,
  },
};
</script>
