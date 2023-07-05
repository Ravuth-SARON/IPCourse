<template>
  <div
    class="menu-item"
    @mouseover="isOpen = true"
    @mouseleave="isOpen = false"
  >
    <a href="#" class="menu-item">{{ title }}</a>
    <transition name="fade" appear></transition>

    <div class="sub-menu" v-if="isOpen">
      <div class="menu-item" v-for="(item, i) in mans" :key="i">
        <a :href="item.link">{{ item.title }}</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Mandrop",
  props: ["title", "mans"],
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
.fade-enter-active,
.fade-leave-active {
  transition: all 0.5s ease-out;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
