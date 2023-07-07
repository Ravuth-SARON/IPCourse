<template>
  <footer
    id="footer"
    style="
      display: flex;
      background-color: gray;
      gap: 50px;
      padding: 40px;
      margin-top: 20px;
    "
    class="w-[1489px]"
  >
    <div id="footer1">
      <p id="header-footer">SHOPME</p>
      <div
        class="social-media"
        style="display: flex; gap: 10px; margin-top: 20px"
      >
        <p class="">Facebook</p>
        <p class="">Instagram</p>
        <p class="">Twitter</p>
      </div>
    </div>
    <div id="contact_us">
      <p id="header-footer" class="mb-5">Contact Us</p>
      <p>
        623 Harrison St., 2nd Floor<br />, San Francisco,<br />
        CA 94107 <br />[ ☎415-201-6370 <br />hello@omnifood.co
      </p>
    </div>
    <div id="resource">
      <p id="header-footer" class="mb-5">Resource</p>
      <div style="display: grid; gap: 10px">
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)">FAQ</a>
        <a
          href=""
          class="w-fit"
          style="text-decoration: none; color: rgb(65, 61, 61)"
          >Privacy Term</a
        >
        <a href="" style="text-decoration: none; color: rgb(65, 61, 61)"
          >Helping Center</a
        >
      </div>
    </div>
    <div id="Account">
      <p id="header-footer" class="mb-5">Account</p>
      <div style="display: grid; width: 200px; gap: 10px">
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
    <div class="signUp" style="display: grid; gap: 10px; padding: 50px 80px">
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
            border: 0.8px solid;
            border-radius: 10px;
            padding: 4px;
          "
          class="text-white"
        >
          Subscribe
        </button>
      </form>
    </div>
  </footer>
</template>

<script>
export default {
  name: "footer",
};
</script>

<style></style>
