import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "./index.css";
import store from "./store";
import {createHead} from '@vueuse/head';
const head=createHead();
import { library } from "@fortawesome/fontawesome-svg-core";

/* import font awesome icon component */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

/* import specific icons */
import {
  faUserSecret,
  faArrowUpWideShort,
  faMagnifyingGlass,
  faHeart,
  faBars,
  faUser,
} from "@fortawesome/free-solid-svg-icons";

/* add icons to the library */

//<<font-awesome-icon icon="fa-solid fa-bars" />
library.add(
  faUserSecret,
  faArrowUpWideShort,
  faMagnifyingGlass,
  faHeart,
  faUser,
  faBars
);

//defined as global component
// Vue.component(
//   "VueFontawesome",
//   require("vue-fontawesome-icon/VueFontawesome.vue").default
// );

createApp(App).use(store)
  .component("font-awesome-icon", FontAwesomeIcon)
  .use(router)
  .use(router)
  .mount("#app");
