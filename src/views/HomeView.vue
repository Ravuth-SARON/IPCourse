<template>
  <div class="home" style="margin: 0 auto">
    <div id="hero_section">
      <div id="hero_desc">
        <h1 id="hero_text" style="display: grid">
          <span>WE PROVIDE</span>
          <span>YOU</span>
          <span>A BETTER LOOK</span>
        </h1>
        <div
          id="promote"
          style="
            margin-left: 200px;
            font-weight: bold;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serif;
          "
        >
          <p>Be quick only 100 available products are on sale</p>

          <span style="margin-left: 200px">Grab your favorite Now</span>
        </div>
        <button
          id="shop"
          style="
            margin: 40px 0px;
            border-radius: 10px;
            border: 1px solid black;
            background-color: brown;
            font-weight: bold;
            width: 100px;
            height: 50px;
            opacity: ;
          "
        >
          <a> SHOP NOW</a>
        </button>
      </div>
      <div id="img">
        <img src="../assets/hero.jpg" alt="" id="hero_img" />
      </div>
    </div>
  </div>
  <div id="trend_section" style="border-radius: 1px; border: 0.2px solid gray">
    <div id="header_trend">
      <h1>Trending Product</h1>
      <p
        style="
          font-size: 20px;
          font-weight: 300;
          font-family: 'Courier New', Courier, monospace;
        "
      >
        We have a thousand product with a affordable price
      </p>
    </div>
    <div id="photo_trend">
      <div class="">
        <img src="../assets/product1.jpg" alt="" id="product" />
        <p id="product_desc">Men cut with sew shirt</p>
        <p id="price">$16.99<span id="priceB_dis">$20.99</span></p>
      </div>
      <div class="">
        <img src="../assets/product2.jpg" alt="" id="product" />
        <p id="product_desc">Lapel long sleeve striped shirt</p>
        <p id="price">$16.99<span id="priceB_dis">$20.99</span></p>
      </div>
      <div class="">
        <img src="../assets/product3.jpg" alt="" id="product" />
        <p id="product_desc">Causal Man shirt</p>
        <p id="price">$16.99<span id="priceB_dis">$20.99</span></p>
      </div>

      <div class="">
        <img src="../assets/product4.jpg" alt="" id="product" />
        <p id="product_desc">Basic Men's flora shirt</p>
        <p id="price">$16.99<span id="priceB_dis">$20.99</span></p>
      </div>
    </div>
  </div>
  <footer id="footer" style="display: flex; gap: 80px; background-color: gray">
    <div id="footer1" style="margin-left: 100px">
      <p id="header-footer">SHOPME</p>
      <div class="social-media" style="display: flex; gap: 10px">
        <p class="">Facebook</p>
        <p class="">Instagram</p>
        <p class="">Twitter</p>
      </div>
    </div>
    <div id="contact_us">
      <p id="header-footer">Contact Us</p>
      <p>
        623 Harrison St.<br />, 2nd Floor<br />, San Francisco,<br />
        CA 94107 <br />[ ☎415-201-6370 <br />hello@omnifood.co
      </p>
    </div>
    <div id="resource">
      <p id="header-footer">Resource</p>
      <div style="display: grid; gap: 20px">
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)">FAQ</a>
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)"
          >Privacy Term</a
        >
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)"
          >Helping Center</a
        >
      </div>
    </div>
    <div id="Account">
      <p id="header-footer">Account</p>
      <div style="display: grid; gap: 20px">
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)"
          >Create Account</a
        >
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)"
          >Log In</a
        >
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)"
          >Other</a
        >
      </div>
    </div>
    <div class="signUp" style="display: grid; gap: 10px; padding: 100px 80px">
      <lable>Sign Up for Your new Style</lable>
      <form action="" style="display: flex; gap: 10px">
        <input
          type="text"
          placeholder="Enter your email"
          style="
            border-radius: 5px;
            width: 200px;
            height: 30px;
            border: 1px solid gray;
            background-color: white;
          "
        />
        <button
          style="
            background-color: blue;
            border: 0.8px solid black;
            border-radius: 10px;
          "
        >
          Subscribe
        </button>
      </form>
    </div>
  </footer>
</template>
<style>
.home {
  height: 600px;
}
#hero_section {
  background-color: #8890b4;
  display: flex;

  justify-content: center;
  gap: 200px;
}
#hero_desc {
  margin-top: 180px;
}
#hero_text {
  color: black;

  font-size: 40px;
}
#hero_img {
  border-radius: 4px;
  border: 0.4px solid rgb(123, 116, 116);
  width: 500px;
  height: 550px;
  margin: 50px 30px;
}
#trend_section {
  margin-top: 80px;
}
#photo_trend {
  margin: 60px 0;

  display: flex;
  gap: 40px;
  justify-content: center;
}
#product {
  border-radius: 10px;
  border: 4px solid black;
  width: 200px;
  height: 180px;
}
#price {
  color: red;
  font-weight: bold;
}
#priceB_dis {
  opacity: 0.4;
  text-decoration: line-through;
  color: gray;
  padding: 10px;
}
#header-footer {
  font-weight: 600;
  color: rgb(65, 61, 61);
}
</style>

<script>
// @ is an alias to /src

export default {
  name: "HomeView",
  components: {},
};
</script>
