import './bootstrap';
import { createApp } from 'vue';
import router from './router';
import app from './layout/app.vue'

createApp(app).use(router).mount("#app")