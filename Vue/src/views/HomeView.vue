<template>
  <div class="grid gap-5">
    <div class="relative w-full">
      <Navigation />
      <img
        src="../assets/hero(4).jpg"
        alt="your-image-alt"
        class="object-cover w-full h-[90vh]"
      />

      <div
        class="absolute inset-0 top-1/3 font-[700] left-[60px] text-[42px] flex flex-col gap-10"
      >
        <h1 class="text-black">A simple Guide <br />To Minimalist Stylish</h1>

        <div class="flex font-[500] text-[22px] text-white">
          <button
            class="border-1 bg-gray-800 py-5 w-fit px-9 text-[42px] rounded-full"
          >
            SHOP NOW
          </button>
        </div>
        <p class="font-[400] text-[24px]">
          "We will provide many product for <br />
          you with the quality and make you more handsome"
        </p>
      </div>
    </div>
    <div class="grid gap-6 bg-slate-200 my-5">
      <h1 class="text-center font-bold text-slate-500 text-[36px]">
        Explore our Products
      </h1>
      <div
        class="grid grid-cols-4 gap-4 justify-center items-center place-items-center"
      >
        <a
          href=""
          class="grid border-2 bg-slate-400 p-2"
          v-for="(category, i) in categorys"
          :key="i"
        >
          <img
            :src="category.image"
            alt=""
            class="w-[200px] h-[200px] object-cover"
          />
          <p>{{ category.name }}</p>
        </a>
      </div>
    </div>
    <!-- Trending Product -->
    <div
      class="grid bg-slate-100 mt-auto justify-center items-center space-y-10 mb-[100px]"
    >
      <h1 class="mx-auto text-slate-600 font-bold text-3xl">
        Trending Product
      </h1>
      <div class="grid grid-cols-2 justify-between mx-auto p-4 gap-[100px]">
        <div
          class="grid border-2 bg-slate-200 p-5"
          v-for="(trending, i) in trendings"
          :key="i"
        >
          <img
            :src="trending.image"
            alt=""
            class="w-[300px] h-[300px] object-cover"
          />
          <div class="flex">
            <p class="font-semibold">{{ trending.name }}</p>
          </div>
          <p class="font-semibold text-right text-slate-500">
            {{ trending.price }}.99$
          </p>
        </div>
      </div>
     
    </div>
    <!-- where we are -->
    <footerVue></footerVue>
  </div>
</template>

<script>
// @ is an alias to /src
import autoslide from "../components/autoslider.vue";
import Navigation from "@/components/Navigation.vue";
import footerVue from "@/components/footer.vue";

export default {
  name: "HomeView",
  components: {
    autoslide,
    Navigation,
    footerVue
  },
  data() {
    return {
      categorys: [
        {
          name: "Jean",
          image: require("../assets/jean.jpg"),
        },
        {
          name: "Jacket",
          image: require("../assets/jacket.jpg"),
        },
        {
          name: "Trouser",
          image: require("../assets/Trouser.jpg"),
        },
        {
          name: "Shoes",
          image: require("../assets/shoes.png"),
        },
        {
          name: "Shoes",
          image: require("../assets/Longshirt.jpg"),
        },
        {
          name: "Hoodie",
          image: require("../assets/Hoodie.jpg"),
        },
        {
          name: "Short",
          image: require("../assets/short.jpg"),
        },
        {
          name: "Solid Shirt",
          image: require("../assets/Solid Shirt.png"),
        },
      ],
      trendings: [
        {
          name: "Casual Solid Color  Collar Shirt",
          image: require("../assets/Trending1.jpg"),
          price: 18,
        },
        {
          name: "Short solid shirt",
          image: require("../assets/Trending2.jpg"),
          price: 16,
        },
        {
          name: "Men slant straight jean",
          image: require("../assets/Trending3.jpg"),
          price: 22,
        },
        {
          name: "Chilae Lace up shoes",
          image: require("../assets/Trending4.jpg"),
          price: 35,
        },
      ],
    };
  },
};
</script>
