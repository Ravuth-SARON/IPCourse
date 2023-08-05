<template>
  <div
    class="menu-item"
    @mouseover="isOpen = true"
    @mouseleave="isOpen = false"
  >
    <a href="#" class="menu-item font-bold text-lg text-white">{{ title }}</a>
    <transition name="fade" appear></transition>
    <div class="sub-menu" v-if="isOpen">
      <div class="menu-item" v-for="(about, i) in abouts" :key="i">
        <a :href="about.link">{{ about.title }}</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["title", "abouts"],
  data() {
    return {
      isOpen: false,
    };
  },
};
</script>

<style>
nav .menu-item .sub-menu {
  position: absolute;
  background-color: #222;
  top: calc(100%+18px);
  left: 50%;
  padding-top: 10px;
  width: max-content;
  transform: translateX(-50%);
  border: 2px solid;
  border-radius: 0px 0px 16px 16px;
}
.fade-enter-active,
.fade-leave-active {
  transition: all 0.5s ease-out;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
