<template class="text-white tracking-wider">
  <div class="bg-black min-w-full mt-4">
    <nav class="container flex justify-center items-center">
      <div
        class="py-5 sm:absolute sm:left-2 text-orange-400 font-bold text-3xl md:text-xl"
      >
        <a href="/" class="text-white"
          >Shop<span class="text-blue-500">ME.</span></a
        >
      </div>
      <Tap class="hidden md:flex" />
      <font-awesome-icon
        v-if="!isOpen"
        @click="isOpen = !isOpen"
        icon="fa-solid fa-bars"
        class="absolute left-4 text-[30px] text-white sm:hidden"
      />
      <div class="absolute right-5 flex gap-3 items-center justify-center">
        <div
          class="border-2 rounded-2xl p-1 text-slate-900 bg-white hidden md:inline-block"
        >
          <input
            type="text"
            placeholder="search here..."
            class="focus:outline-none"
          />

          <font-awesome-icon icon="fa-solid fa-magnifying-glass" id="search" />
        </div>
        <button>
          <a href="/cart" class="text-white bg-cyan-500 px-5 py-2 rounded-md"
            >Cart ()</a
          >
        </button>
        <div class="flex">
                  <div v-if="isLoggedIn" class="rounded-full p-2 bg-slate-100">
                       <div class="text-black font-bold">{{ userData.user.name }}</div>
                  </div>
                  <button v-else  class="rounded-full p-2 bg-slate-100" @click="goToLogin">
                       <font-awesome-icon icon="fa-solid fa-user" class="text-[30px]" />
                  </button>
         </div>
      </div>
    </nav>
  </div>
</template>

<script>
import Mandrop from "./shopME/ManDropDown.vue";
import About from "./shopME/About.vue";
import LogIn from "../views/LogIn.vue";
import Tap from "./Tap.vue";


export default {
  name: "navBar",
 
  components: {
    Mandrop,
    About,
    LogIn,
    

    Tap,
  }
   
  ,
  data() {
    return {
      showSearch: false,
      showLoginModal: false,
      isLoggedIn:false,
      userData: {},
      isOpen: false,
    };
  },
  methods: {
    toggleSearch() {
      this.showSearch = !this.showSearch;
    },
    menuClick() {
      this.isOpen = !this.isOpen;
    },
    closeLoginModal() {
      this.showLoginModal = false;
    },
    async goToLogin() {
      this.$router.push("/login");
    },
    
  },
  created() {
    const authToken = localStorage.getItem("token");
    console.log(authToken);
    if (authToken) {
      // If a token is found in local storage, the user is considered logged in
      this.isLoggedIn = true;
      // You may also want to fetch the user data from the backend using the token
      // For this example, we are assuming that you store the user data in local storage too
      const userData = localStorage.getItem("user")
    
      if (userData) {
        this.userData = JSON.parse(userData);
      }
    }
  },
 
 
};
</script>

<style>
nav .menu-item {
  position: relative;
  padding: 10px 0px;

  text-align: center;
  border-bottom: 3px solid transparent;

  transition: 0.4s;
}
nav .menu-item a {
  text-decoration: none;
  padding: 0 10px;
}
nav .menu-item .sub-menu {
  position: absolute;
  background-color: rgb(230, 229, 229);
  top: calc(100%+18px);
  left: 50%;
  padding: 10px;
  font-weight: 300;
  width: max-content;
  transform: translateX(-50%);
  border: 2px solid;
  border-radius: 0px 0px 16px 16px;
}
nav a {
  color: #fff;
}
nav .menu-item.active,
.menu-item:hover {
  background-color: rgba(48, 46, 63, 0.534);
  border-bottom-color: rebeccapurple;
}
</style>
