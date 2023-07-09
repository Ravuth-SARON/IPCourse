<template>
  <div>
    <img :src="image" alt="Product Image" />
    <!-- Rest of your order page content -->
    <h1>{{ product.price }}</h1>
  </div>
</template>

<script>
export default {
  data() {
    return {
      product: null,
    };
  },
  mounted() {
    this.product = JSON.parse(this.$route.params.product);
  },
};
</script>

<style></style>
