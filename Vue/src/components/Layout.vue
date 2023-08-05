<template>
  <div class="">
    <Navigation/>
      <slot></slot>
    <footerVue/>
  </div>

</template>

<script>
import Navigation from './Navigation.vue';
import FooterVue from './footer.vue';
export default {
components:{
    FooterVue,
    Navigation
}
}
</script>

<style>

</style>