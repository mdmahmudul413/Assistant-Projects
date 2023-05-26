import { createWebHistory, createRouter } from "vue-router";
import store from './store'

const routes = [
    {
        path: '/',
        name: 'login',
        component: import(/* webpackChunkName: "LoginView" */ "./pages/LoginView.vue"),
        meta: {
            requiresAuth: false,
        }
    },
    {
        path: '/register',
        name: 'register',
        component: import(/* webpackChunkName: "RegisterView" */ "./pages/RegisterView.vue"),
        meta: {
            requiresAuth: true,
        }
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: import(/* webpackChunkName: "DashboardView" */ "./pages/DashboardView.vue"),
        meta: {
            requiresAuth: true,
        }
    },
    {
        path: '/department',
        name: 'department',
        component: import(/* webpackChunkName: "DepartmentView" */ "./pages/DepartmentView.vue"),
        meta: {
            requiresAuth: true,
        }
    },
    {
        path: '/student',
        name: 'student',
        component: import(/* webpackChunkName: "StudentView" */ "./pages/StudentView.vue"),
        meta: {
            requiresAuth: true,
        }
    },
    {
        path: '/image',
        name: 'image',
        component: import(/* webpackChunkName: "StudentView" */ "./pages/ImageView.vue"),
        meta: {
            requiresAuth: true,
        }
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to, from) => {
    if (to.meta.requiresAuth && store.getters.getToken == 0)
    {
        return {name: 'login'}
    }
    if (to.meta.requiresAuth == false && store.getters.getToken != 0)
    {
        return {name: 'dashboard'}
    }
})

export default router;
