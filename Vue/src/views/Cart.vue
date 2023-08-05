<template>
  <Layout>
    <div class="v" v-if="cartItems.length==0 ">
       <EmptyCart ></EmptyCart>
      </div>
   
    <div class="" >
      <div class="bg-gray-100 pt-20">
      <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
      <div
        class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0"
      >
        <div class="rounded-lg md:w-2/3">
          <div
            v-for="product in cartItems"
            :key="product.id"
            class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start"
          >
            <img
              :src="getImage(product.product.image_path)"
              alt="product-image"
              class=" rounded-lg w-[200px] h-[100px] object-cover"
            />
            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
              <div class="mt-5 sm:mt-0 flex flex-col justify-between">
                <h2 class="text-lg font-bold text-gray-900">
                  {{ product.product.title }}
                </h2>
                <p class="mt-1 text-lg text-gray-700 top-0 relative">
                  {{ product.product.price }}$
                </p>
              </div>
              <div
                class="mt-4 flex justify-between im sm:space-y-6 sm:mt-0 sm:block sm:space-x-6"
              >
                <div class="flex items-center border-gray-100 grow">
                  <span
                     @click="decrementQuantity(product)"
                    class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"
                  >
                    -
                  </span>
                  <input
                    class="h-8 w-[50px] border bg-white text-slate-800 text-center text-xs outline-none"
                    v-model="product.quantity"
                      @change.prevent="updateCartItemQuantity(product)"

                    min="1"
                  />
                  <span
                     @click="incrementQuantity(product)"
                    class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"
                  >
                    +
                  </span>
                </div>

                <button class="w-fit p-2 bg-black text-white rounded-lg">
                  Remove from cart
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Sub total -->
        <div
          v-if="cartItems.length>0"
          class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3"
        >
          <div class="mb-2 flex justify-between">
            <p class="text-gray-700">Subtotal</p>
            <p class="text-gray-700">{{ subTotal }}$$</p>
          </div>
          <div class="flex justify-between">
            <p class="text-gray-700">Shipping</p>
            <p class="text-gray-700">$2.99</p>
          </div>
          <hr class="my-4" />
          <div class="flex justify-between">
            <p class="text-lg font-bold">Total</p>
            <div class="">
              <p class="mb-1 text-lg font-bold">USD{{ this.total }}$</p>
              <p class="text-sm text-gray-700">including VAT</p>
            </div>
          </div>
          <button @click="goToPayment"
            class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600"
          >
            Check out
          </button>
        </div>
      </div>
    </div>
    </div>
    
    
  </Layout>
</template>



<script>
import Layout from "@/components/Layout.vue";
import EmptyCart from "@/components/EmptyCart.vue";
import axios from "axios";

export default {
  components: {
    Layout,
    EmptyCart
  },
  data() {
    return {
      cartItems: [],
      NoCard:false
    };
  },

  methods: {
    getImage(imagePath) {
      return `http://127.0.0.1:8000/storage/${imagePath}`;
    },
    async updateCartItemQuantity(item) {
      try {
        const response = await axios.put(
          `http://localhost:8000/api/cart/update/${item.id}`,
          { quantity: item.quantity }
        );
        console.log('Quantity updated successfully:', response.data);
      } catch (error) {
        console.error('Error updating cart item quantity:', error);
      }
    },
    incrementQuantity(item) {
      item.quantity++;
    },
    decrementQuantity(item) {
      if (item.quantity > 1) {
        item.quantity--;
      }
    },
    goToPayment() {
      this.$router.push({ name: "payment" });
    },
  },
  async mounted() {
    try {
      const authToken = localStorage.getItem('token');
      axios.defaults.headers.common['Authorization'] = `Bearer ${authToken}`;

      const response = await axios.get('http://localhost:8000/api/carts');
      this.cartItems = response.data; // Assuming the API returns an array of cart items
      console.log(this.cartItems);
      console.log(this.cartItems.quantity);
    } catch (error) {
      console.error('Error fetching cart items:', error);
    }
  },
  computed: {
    subTotal() {
      return this.cartItems.reduce(
        (sum, item) => sum + item.product.price * item.quantity,
        0
      );
    },
    total(){
      return this.subTotal+2.99
    }
    
  },
};
</script>

<style>
/* Your style definitions here */
</style>

