<template>
  <div class="w-full bg-slate-900 h-[50px] flex items-center justify-center">
    <transition-group name="slide" tag="div">
      <div v-for="i in [currentIndex]" :key="i">
        <h1 class="text-white text-center">{{ currentImg }}</h1>
      </div>
    </transition-group>
  </div>
</template>

<script>
export default {
  name: "Slider",
  data() {
    return {
      images: ["Free Delivery", "3 Free 1", "Membership(spend over 50$)"],
      timer: null,
      currentIndex: 0,
    };
  },
  mounted: function () {
    this.startSlide();
  },
  methods: {
    startSlide: function () {
      this.timer = setInterval(this.next, 2000);
    },
    next: function () {
      this.currentIndex += 1;
      if (this.currentIndex > this.images.length) {
        this.currentIndex = 0;
      }
    },
    prev: function () {
      this.currentIndex -= 1;
    },
  },
  computed: {
    currentImg: function () {
      return this.images[Math.abs(this.currentIndex) % this.images.length];
    },
  },
};
</script>
<style>
.slide-enter-active,
.slide-leave-active {
  transition: all 1s;
}
.slide-enter,
.slide-leave-to {
  transform: translateX(100%);
}
</style>
