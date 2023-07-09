import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "./index.css";
//import material-icon scss
/* import the fontawesome core */
import { library } from "@fortawesome/fontawesome-svg-core";

/* import font awesome icon component */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

/* import specific icons */
import {
  faUserSecret,
  faArrowUpWideShort,
  faMagnifyingGlass,
  faHeart,
  faUser,
} from "@fortawesome/free-solid-svg-icons";

/* add icons to the library */

//<font-awesome-icon icon="fa-light fa-heart" />
library.add(
  faUserSecret,
  faArrowUpWideShort,
  faMagnifyingGlass,
  faHeart,
  faUser
);

//defined as global component
// Vue.component(
//   "VueFontawesome",
//   require("vue-fontawesome-icon/VueFontawesome.vue").default
// );

createApp(App)
  .component("font-awesome-icon", FontAwesomeIcon)
  .use(router)
  .mount("#app");
