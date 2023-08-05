<script>
import Layout from "@/components/Layout.vue";
import axios from 'axios';

export default {
  components: {
    Layout,
  },
  data() {
    return {
      products: [],
    };
  },
  
  methods: {
    getImage(imagePath) {
      return `http://127.0.0.1:8000/storage/${imagePath}`;
    },
    async addToCart(productId) {
        try {
          const authToken = localStorage.getItem('token');
          axios.defaults.headers.common['Authorization'] = `Bearer ${authToken}`;
          // Make a POST request to the API to add the product to the cart
          await axios.post(`http://localhost:8000/api/cart/add/${productId}`);
          // Display a success message or perform any other actions after adding to cart
          console.log(`Product with ID ${productId} added to cart successfully.`);
          window.alert('Product added to cart.');
        } catch (error) {
          // Handle any errors that occur during the API request
          console.error('Error adding product to cart:', error);
        }
  },
   },
   async mounted() {
      try {
         const response = await axios.get('http://127.0.0.1:8000/api/products');
         this.products = response.data.products; // Access the 'products' array from the API response

    // Use JSON.stringify with a replacer function to handle circular references
             console.log(this.products);
       } catch (error) {
            console.error('Error fetching products:', error);
        }
},
};
</script>
<template>
  <div>
    <Layout>
      <div class="bg-slate-600 w-full">
        <h1 class="bg-black text-white text-center mt-5">New IN</h1>
        <div
          class="container grid grid-cols-2 justify-center gap-2 md:grid-cols-4 place-items-center items-center"
        >
          <div
            class="border-2 p-4 bg-white shadow:md rounded-md grid h-[500px]"
            v-for="product in products"
            :key="product.id"
          >
            <img :src="getImage(product.image_path)" class="w-[300px] h-[300px] object-cover" />
            <h1>{{ product.title }}</h1>
            <h1 class="font-[500] text-slate-600 text-lg">{{ product.price }}$</h1>
            <div class="flex mt-3">
              <div
                v-for="color in product.colors"
                :key="color"
                :style="{ backgroundColor: color }"
                class="border-[2px] p-2 rounded-md w-2 h-2"
              ></div>
            </div>
            <router-link class="text-right" v-bind:to="'/products/' + product.id">
              <button>View Detail</button>
            </router-link>
            <button @click="addToCart(product.id)"  class="bg-black p-2 rounded-md text-white font-semibold">Add to Cart</button>
         
          </div>
        </div>
      </div>
    </Layout>
  </div>
</template>



<style></style>
