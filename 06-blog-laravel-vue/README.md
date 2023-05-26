## **Vue Laravel Intigration**

    1. Install Fresh laravel

    2.  To check laravel version

        command: php artisan --version

    3. Install vue and vue-loader

        command: npm install vue@next vue-loader@next

    4. Then, Install npm

        command: npm install

    5. create a folder name layout inside js folder and inside layout create app.vue file

    6. Inside resource/js/app.js,

        import './bootstrap';
        import { createApp } from 'vue';
        import app from './layout/app'

        createApp(app).mount('#app')

    7. Install @vitejs/plugin-vue to handle .vue files

        command: npm i @vitejs/plugin-vue

    8. Inside vite.config.js

        import vue from '@vitejs/plugin-vue'

        export default {
            plugins: [vue()],
        }

        
## **Any Route**

    1. Add "any" route to avoid 404 not found error

    Route::any('{slug}', function(){
        return view('welcome');
    });


## **Installing Vue Router**

    1. Create some pages inside js/pages

    2. Install router

        command: npm install vue-router@next

    3. create router.js inside js folder
        
    4. Inside router.js

        import { createWebHistory, createRouter } from "vue-router"; 

        const routes = [
            {
                path: '/',
                name: 'home',
                component: import(/* webpackChunkName: "HomeView" */ "./pages/HomeView.vue")
                    ,
            },
            {
                path: '/login',
                name: 'login',
                component: import(/* webpackChunkName: "LoginView" */ "./pages/LoginView.vue"),
            },
            {
                path: '/register',
                name: 'register',
                component: import(/* webpackChunkName: "RegisterView" */ "./pages/RegisterView.vue"),
            },
        ];

        const router = createRouter({
            history: createWebHistory(),
            routes
        });

        export default router;

    5. Inside app.js

        import router from './router';

        createApp(app).use(router).mount("#app")

    7. Now we use <router-view/> inside app.vue file to load component

## **Hook**

    1. data(){} property is the local memory of perticular vue component

    2. Created Hook

        We call mostly initial data from created hood. It can no direct connect with template elements. But created can access all other
        property or method like data(), computed, etc all related with vue.js.

        Example: 

            <template>
                <div class="">
                    <h1 ref="myref">Hook Practice</h1>
                </div>
            </template>

            created() {
                // We call mostly initial data from created hood
                console.log(this.$refs.myref);
            }, 

        Note: 
            a. It will return undefined.
            b. Created is instantiate before randering the html part. That's why, we can't access the html elemets

    3. Before Created Hook

        This hook is created before the created hook. It can access very much limited property. We can use it for routing.

        Example:

            data(){
                return {
                    name: 'Sadek',
                }
            },
         
            beforeCreate() {
                console.log(this.name);
            },

        Note: 
            
            a. It will return undefined.

            b. Before Created is instantiate before randering the html part. That's why, we can't access the html elemets

    4. Mounted Hook

        a. To access local storage, we have to use mounted hook. We can not use local storage using created or beforeCreated hook.

        b. We can access all the html elements using mounted hook.

    Note: Mounted hook is instantiate after randering the html part. That's why, we can access the html elemets.

## **If Else, For Loop, Array, Object**

    <template>
    <h1>The Number is {{ counter }}</h1>
    <button @click="updateCounter(1)">Increase</button>
    <button @click="updateCounter(-1)">Decrease</button>

    <br><br><br><br>

    <div v-for="(blog, index) in blogs" :key="index" v-if="blogs.length">
        <h1>{{ blog.title }}</h1>
       <p>{{ blog.post }}</p> 
    </div>

    <br><br><br><br>


    <div>
        <h1 v-if="showItem">Show this item if 'showItem' is true</h1>
        <h1 v-else>Show this item if 'showItem' is false</h1>
        <button @click="showItem = !showItem">Change Show Item</button>
    </div>
    </template>

    <script>
        export default {
            data() {
                return {
                    counter: 0,
                    blogs: [],
                    showItem: false,
                }
            },

            methods: {
                updateCounter(number){
                    this.counter += number;
                },
            },

            created(){
                this.counter = 100;

                let posts = [
                        {id: 1, title: 'This is title one', post: 'This is post one'},
                        {id: 2, title: 'This is title two', post: 'This is post two'},
                        {id: 3, title: 'This is title three', post: 'This is post three'},
                        {id: 4, title: 'This is title four', post: 'This is post four'},
                        {id: 5, title: 'This is title five', post: 'This is post five'},
                        {id: 6, title: 'This is title six', post: 'This is post six'},
                    ]
                this.blogs = posts;
            }
        }
    </script>

    
## **Vue Mixin and Axios**

    1. Create common.js file inside js folder

    2. inside common.js file,

        export default {
            data() {
                return {
                    
                }
            },

            methods: {
                callApi(method, url, dataObj){
                    try {
                        axios({
                            method: method,
                            url: url,
                            data: dataObj,
                        });
                    } catch (e) {
                        return e.response;
                    }
                }
            },
        }

        

        
