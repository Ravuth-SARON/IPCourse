import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
// import store from "@/store";

import Dashboard from "../views/Dashboard.vue"
const routes = [
  {
    path:'/login',
    name:'Login',
    component:()=>import("../views/LogIn.vue")
  },
 
  // {
  //   path: '/app',
  //   name: 'app',
  //   redirect: '/app/dashboard',
  //   component: HomeView,
  //   meta: {
  //     requiresAuth: true
  //   },
  //   children: [
  //     {
  //       path: 'dashboard',
  //       name: 'app.dashboard',
  //       component: Dashboard
  //     },
      
  //   ]
  // },
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/Products",
    name:"newIn",
    component: () => import("../views/NewIn.vue")
  },
  {
    path:'/products/:id',
    name:"ProductDetail",
    // component:ProductDetailPage
  },
  {
    path: "/cart",
    name:"Cart",
    component: () => import("../views/Cart.vue")
  },
  {
    path:'/',
    redirect:'/Products'
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
    path: "/size",
    name: "size",
    component: () => import("../components/AboutSize.vue"),
  },
  {
    path: "/login",
    name: "login",
    component: () => import("../views/LogIn.vue"),
  },
  {
    path: "/requestpassword",
    name: "requestPassword",
    component: () => import("../views/RequestPassword.vue"),
  },
  {
    path: "/reset-password/:token",
    name: "resetPassword",
    component: () => import("../views/ResetPassword.vue"),
  },

  {
    path: "/signUp",
    name: "signup",
    component: () => import("../components/SignUp.vue"),
  },

  {
    path: "/checkout",
    name: "checkout",
    component: () => import("../views/Checkout.vue"),
  },

  {
    path: "/payment",
    name: "payment",
    component: () => import("../views/Payment.vue"),
  },
  {
    
      path: '/:pathMatch(.*)*',
      component: () => import('@/views/404NotFound.vue')
    
  }
  ,{
    path:"/success",
    name:"success",
    component:()=>import('@/views/OrderSucess.vue')
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});
router.beforeEach((to, from, next) => {
  const userToken = localStorage.getItem('token');

  if (to.meta.requiresAuth && !userToken) {
    next({ name: 'login' });
  } else if (to.path === '/cart' && !userToken) {
    next({ name: 'login' });
  } else {
    next();
  }
});

export default router
