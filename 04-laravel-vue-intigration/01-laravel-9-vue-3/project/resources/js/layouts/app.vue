<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <p class="navbar-brand mb-0">SMS</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{name: 'login'}" v-if="$store.getters.getToken == 0">Login</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{name: 'dashboard'}" v-if="$store.getters.getToken != 0">Dashboard</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{name: 'department'}" v-if="$store.getters.getToken != 0">Department</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{name: 'student'}" v-if="$store.getters.getToken != 0">Student</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{name: 'register'}" v-if="$store.getters.getToken != 0">Register</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{name: 'image'}" v-if="$store.getters.getToken != 0">Upload</router-link>
                    </li>
                </ul>
                <div>
                    <button @click="logout" type="button" class="btn btn-danger" v-if="$store.getters.getToken != 0">Log Out</button>
                </div>
            </div>
        </div>
    </nav>
    <router-view/>
</template>

<script>
    import { useRouter } from 'vue-router'
    import { useStore } from 'vuex'

    export default {
        setup(){
            const router = new useRouter();
            const store = useStore();

            function logout() {
                store.dispatch('removeToken');
                router.push({name: 'login'})
            }

            return{
                logout,
            }
        }
    }
</script>
