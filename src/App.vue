<template>
  <div id="header">
    <div id="img">
      <img alt="Vue logo" src="./assets/large.png" id="logo" />
      <p>SHOPME</p>
    </div>

    <nav id="navigation">
      <router-link to="/">Home</router-link>
      <router-link to="/about">ShopME</router-link>
      <router-link to="/men">Man</router-link>
      <router-link to="/woman">Woman</router-link>
      <router-link to="/bestseller">Best Seller</router-link>
    </nav>
  </div>

  <router-view />
</template>

<style>
#header {
  margin: auto;
  display: flex;

  /* width: 1200px; */
  height: 120px;
  background-color: rgba(227, 226, 234, 0.534);
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
  /* //font-weight: ; */
  color: #0b2038;
  font-family: "Montserrat", sans-serif;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
