<template>
  <div
    class="flex bg-slate-400 mt-[90px] px-5 mx-auto items-center justify-center w-full"
  >
    <nav class="flex justify-center items-center font-black grow">
      <button class="menu-item"><a href="/">Home</a></button>
      <About title="About" :abouts="abouts" />
      <Mandrop title="Shop" :mans="mans" />
      <div class="menu-item"><a href="#">Contact</a></div>
    </nav>
    <div class="flex-end mx-[10px] flex justify-between gap-5">
      <div>
        <input
          type="text"
          placeholder="search here"
          class="p-2 border-white border-1"
          v-show="showSearch"
        />
        <button @click="toggleSearch" v-show="!showSearch">
          <font-awesome-icon
            icon="fa-solid fa-magnifying-glass"
            class="w-[30px] h-[30px]"
          />
        </button>
      </div>
      <!-- <div>
        <button class="text-[26px] font-[400]">Shop</button>
      </div> -->
      <font-awesome-icon icon="fa-solid fa-heart" class="w-[30px] h-[30px]" />
      <button @click="LogIn" class="transition duration-300 ease-in-out">
        <font-awesome-icon
          icon="fa-solid fa-user"
          class="w-[26px] h-[26px] border-2 border-slate-200 mb-2 bg-slate-200 p-1 rounded-full"
        />
      </button>
    </div>
  </div>
</template>

<script>
import Mandrop from "./shopME/ManDropDown.vue";
import About from "./shopME/About.vue";
import LogIn from "./LogIn.vue";
export default {
  name: "navBar",
  components: {
    Mandrop,
    About,
    LogIn,
  },
  data() {
    return {
      showSearch: false,
      showLoginModal: false,
      mans: [
        {
          title: "NewIn",
          link: "newIn",
        },
        {
          title: "Clothing",
          link: "clothing",
        },
        {
          title: "Accessorie",
          link: "accessories",
        },
        {
          title: "Shoes",
          link: "shoes",
        },
        {
          title: "Shirt",
          link: "#",
        },
        {
          title: "Sale",
          link: "#",
        },
      ],
      abouts: [
        {
          title: "Shop",
          link: "shop",
        },
        {
          title: "Size",
          link: "size",
        },
        {
          title: "Personallity",
          link: "personality",
        },
      ],
    };
  },
  methods: {
    toggleSearch() {
      this.showSearch = !this.showSearch;
    },
    LogIn() {
      this.$router.push("/login");
    },
    closeLoginModal() {
      this.showLoginModal = false;
    },
  },
};
</script>

<style>
nav .menu-item {
  position: relative;
  padding: 10px 20px;

  text-align: center;
  border-bottom: 3px solid transparent;

  transition: 0.4s;
}
nav .menu-item a {
  text-decoration: none;
}
nav .menu-item .sub-menu {
  position: absolute;
  background-color: rgb(230, 229, 229);
  top: calc(100%+18px);
  left: 50%;
  padding-top: 10px;
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
