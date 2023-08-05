<template>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-slate-700">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto rounded-full h-[100px] w-[100px]" src="../assets/ShopME.png" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST" @submit.prevent="login">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input
              id="email"
              type="email"
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              v-model="email"
            >
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div>
          </div>
          <div class="mt-2">
            <input
              id="password"
              type="password"

              required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
              v-model="password"
            >
          </div>
        </div>

        <div>
          <button
            type="submit"
           
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
          >
            Sign in
          </button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Do not have an account?
        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register</a>
      </p>
    </div>
  </div>
</template>

<script>
import axios from "axios"

export default {
  name: 'Login',
  components: {
    
  },

  data() {
    return {
      email: '',
      password: '',
      hasError: false,
    };
  },
  methods: {
    login() {
      const userData = {
        "email": this.email,
        "password": this.password,
      };
      axios.post('http://localhost:8000/api/login', userData)
        .then(response => {
          console.log(response.data);
          if (response.data.message == "Wrong credentials") {
            this.hasError = true;
            console.log('false')
            this.$router.push('/login');
          } else {
            console.log('true')
            // Save the token to local storage after successful login
            localStorage.setItem('token', response.data.token);
            localStorage.setItem('user', JSON.stringify(response.data));

            this.hasError = false;

            // Optionally, you can redirect the user to a dashboard or home page
            this.$router.push('/');
          }
        })
        .catch(error => {
          console.log(error)
        });
    },
  },
};

</script>

<style>
/* Your styles (if any) go here */
</style>
