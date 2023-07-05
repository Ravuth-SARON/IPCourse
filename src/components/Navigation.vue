<template>
  <div class="flex bg-slate-400 w-full">
    <nav class="flex justify-center items-center font-black">
      <button class="menu-item"><a href="/">Home</a></button>
      <About title="About" :abouts="abouts" />
      <Mandrop title="Shop" :mans="mans" />
      <div class="menu-item"><a href="#">Contact</a></div>
    </nav>
  </div>
</template>

<script>
import Mandrop from "./shopME/ManDropDown.vue";
import About from "./shopME/About.vue";
export default {
  name: "navBar",
  components: {
    Mandrop,
    About,
  },
  data() {
    return {
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
