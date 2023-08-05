<template>
  <ul
    class="md:flex justify-between items-center md:gap-10 font-bold text-white"
  >
    <li>
      <Mandrop
        title="About"
        class="font-bold text-lg text-white"
        :mans="abouts"
      />
    </li>
    <li>
      <About title="Shop" :abouts="mans" />
    </li>
    <li>
      <a href="man" class="menu">Man</a>
    </li>
    <li>
      <a href="woman" class="menu">Woman</a>
    </li>
  </ul>
</template>

<script>
import Mandrop from "./shopME/ManDropDown.vue";
import About from "./shopME/About.vue";
import LogIn from "../views/LogIn.vue";

export default {
  name: "Menu",
  components: {
    Mandrop,
    About,
  },
  data() {
    return {
      showSearch: false,
      showLoginModal: false,
      mans: [
        {
          title: "All Product",
          link: "Products",
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
};
</script>

<style></style>
