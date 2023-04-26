import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import(/* webpackChunkName: "about" */ '../views/HomeView')
  },
  {
    path: '/product-category/:id',
    name: 'category',
    component: () => import(/* webpackChunkName: "about" */ '../views/CategoryView.vue')
  },
  {
    path: '/product-detail/:id',
    name: 'detail',
    component: () => import(/* webpackChunkName: "about" */ '../views/DetailView.vue')
  },
  {
    path: '/show-cart',
    name: 'cart',
    component: () => import(/* webpackChunkName: "cart" */ '../views/CartView.vue')
  },
  {
    path: '/checkout',
    name: 'checkout',
    component: () => import(/* webpackChunkName: "checkout" */ '../views/CheckoutView.vue')
  },
  {
    path: '/complete-order',
    name: 'completeOrder',
    component: () => import(/* webpackChunkName: "completeOrder" */ '../views/CompleteOrderView.vue')
  },
  {
    path: '/my-dashboard',
    name: 'dashboard',
    component: () => import(/* webpackChunkName: "dashboard" */ '../views/DashboardView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
