<template>
  <header>
    <Navigation class="mb-[20px]" />
  </header>
  <body>
    <RouterView />
  </body>
</template>

<script>
import Navigation from "./components/Navigation.vue";

export default {
  name: "app",
  components: {
    Navigation,
  },
};
</script>
<style>
header {
  margin: auto;
  display: flex;

  /* width: 1200px; */
  height: fit-content;
  padding: 30px;
  color: black;
  background-color: #fff;
  gap: 140px;
}
#navigation {
  display: flex;
  gap: 40px;
  font-family: "Montserrat", sans-serif;
}
#img {
  margin: 10px 30px 0px 30px;
  font-family: "Times New Roman", Times, serif;
  font-size: 20px;
  font-weight: bold;
}
#logo {
  width: 60px;
  height: 60px;

  border-radius: 100px;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#checkbutton {
  display: flex;
  gap: 20px;
  color: #0b2038;
}

nav {
  padding: 30px;
}

nav a {
  color: #0b2038;
  font-family: "Montserrat", sans-serif;
}

nav a.router-link-exact-active {
  color: #42b983;
  font-weight: 00;
  text-decoration: underline;
}
</style>
