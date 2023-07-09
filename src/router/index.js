import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/about",
    name: "about",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import("../views/AboutView.vue"),
  },
  {
    path: "/men",
    name: "men",
    component: () => import("../views/MeCat.vue"),
  },
  {
    path: "/shop",
    name: "shop",
    component: () => import("../components/AboutShop.vue"),
  },
  {
    path: "/size",
    name: "size",
    component: () => import("../components/AboutSize.vue"),
  },
  {
    path: "/login",
    name: "Login",
    component: () => import("../components/LogIn.vue"),
  },
  {
    path: "/signUp",
    name: "signup",
    component: () => import("../components/SignUp.vue"),
  },
  {
    path: "/newIn",
    name: "newIn",
    component: () => import("../components/NewIn.vue"),
  },
  {
    path: "/order",
    name: "order",
    component: () => import("../components/Order.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
