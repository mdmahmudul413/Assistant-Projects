<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="text-center mb-5">LOGIN</h2>
            <div class="col-md-6">
                <p class="text-danger" v-if="error">{{error}}</p>
                <form @submit.prevent="login">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" v-model="form.email"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" v-model="form.password"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary w-100">Log in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import { reactive, ref } from 'vue'
    import { useRouter } from 'vue-router'
    import { useStore } from 'vuex'

    export default {
        setup(){
            const router = useRouter()
            const store = useStore();

            let form = reactive({
                email: '',
                password: ''
            });

            let error = ref('')

            const login = async() => {
                await axios.post('/api/login', form).then(response =>{
                    if(response.data.success)
                    {
                        store.dispatch('setToken', response.data.data.token);
                        router.push({name: 'dashboard'})
                    }
                    else
                    {
                        error.value = response.data.message;
                    }
                });
            }
            return{
                form, login, error
            }
        }
    }
</script>
