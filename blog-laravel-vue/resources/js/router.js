import { createWebHistory, createRouter } from "vue-router"; 

const routes = [
    {
        path: '/',
        name: 'home',
        component: import(/* webpackChunkName: "HomeView" */ "./pages/HomeView.vue")
        ,
    },
    {
        path: '/tags',
        name: 'tags',
        component: import(/* webpackChunkName: "TagView" */ "./pages/TagView.vue"),
    },
    {
        path: '/register',
        name: 'register',
        component: import(/* webpackChunkName: "RegisterView" */ "./pages/RegisterView.vue"),
    },
    {
        path: '/hooks',
        name: 'hooks',
        component: import(/* webpackChunkName: "RegisterView" */ "./pages/basic-vue/HookView.vue"),
    },
    {
        path: '/methods',
        name: 'methods',
        component: import(/* webpackChunkName: "RegisterView" */ "./pages/basic-vue/MethodView.vue"),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;