<template>
  <div class="flex overflow-auto">
    <div class="mx-auto mt-5">
      <h1 class="text-center place-content-center bg-black text-white">
        New In
      </h1>
      <div
        class="flex cursor-pointer justify-start items-start gap-2 rounded-md border-2 p-2 border-black w-fit mt-4"
      >
        <font-awesome-icon icon="fa-solid fa-arrow-up-wide-short" />
        <h1>Filter</h1>
      </div>

      <div
        class="grid grid-cols-4 place-content-center gap-3 justify-center items-center mt-5"
      >
        <div
          class="border-2 rounded-md p-3 w-fit mx-auto"
          v-for="(product, i) in products"
          :key="i"
        >
          <img :src="product.image" alt="" class="w-[310px] h-[310px] mb-5" />
          <div class="flex flex-col justify-start items-start">
            <h1 class="text-slate-800 font-semibold text-[16px]">
              US {{ product.price }}$
            </h1>
            <p class="start">{{ product.name }}</p>
          </div>
          <div class="flex mt-3">
            <div
              v-for="i in product.colors"
              :key="i"
              :style="{ backgroundColor: i }"
              class="border-[2px] p-2 rounded-md w-2 h-2"
            ></div>
          </div>

          <div class="flex justify-end" @click="getProduct(product)">
            <button
              class="bg-blue-400 w-[40px] h-[40px] text-white text-[28px] font-bold rounded-full"
            >
              +
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [
        {
          price: 15,
          name: "Long sleeve Shirt",
          image: require("../assets/produc1.jpg"),
          colors: ["red", "black", "brown", "#6F4E37"],
        },
        {
          price: 20,
          name: "Slim fit shirt",
          image: require("../assets/product1.jpg"),

          colors: ["red", "black", "brown", "#6F4E37"],
        },
        {
          price: 15,
          name: "Loose Fit Henley Shirt",
          image: require("../assets/product2.jpg"),
          colors: ["red", "black", "brown", "#6F4E37"],
        },
        {
          name: "T-shirt Polo spaceX",
          price: 20,
          image: require("../assets/product3.jpg"),
          colors: ["red", "black", "brown", "#6F4E37"],
        },
        {
          name: "Nanushka Bodil Camp Shirt ",
          price: 25,
          image: require("../assets/product7.jpg"),
          colors: ["red", "black", "brown", "#6F4E37"],
        },

        {
          price: 15,
          name: "cowboy shirt Long",
          image: require("../assets/product4.jpg"),
          colors: ["red", "black", "brown", "#6F4E37"],
        },
        {
          price: 15,
          name: "T-Shirt nood",
          image: require("../assets/product5.jpg"),
          colors: ["red", "black", "brown", "#6F4E37"],
        },
        {
          name: "SHEIN Men Contrast Collar Shirt Without Tee",
          price: 17,
          image: require("../assets/product6.jpg"),
          colors: ["red", "black", "brown", "#6F4E37"],
        },
      ],
    };
  },
  methods: {
    getProduct(product) {},
  },
};
</script>

<style></style>
