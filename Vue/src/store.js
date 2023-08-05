// src/store.js
import { createStore } from 'vuex';

const store = createStore({
  state: {
    baseUrl: 'http://127.0.0.1:8000/api/products', // Replace with the base URL of your API
  },
});

export default store;
