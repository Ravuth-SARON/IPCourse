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
} from "@fortawesome/free-solid-svg-icons";

/* add icons to the library */
library.add(faUserSecret, faArrowUpWideShort);

//defined as global component
// Vue.component(
//   "VueFontawesome",
//   require("vue-fontawesome-icon/VueFontawesome.vue").default
// );

createApp(App)
  .component("font-awesome-icon", FontAwesomeIcon)
  .use(router)
  .mount("#app");
