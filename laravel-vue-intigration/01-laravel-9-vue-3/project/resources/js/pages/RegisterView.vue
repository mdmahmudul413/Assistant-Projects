<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="text-center mb-5">REGISTER NEW USER</h2>
            <div class="col-md-7">
                <form @submit.prevent="register">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" v-model="form.name"/>
                            <p class="text-danger mb-0" v-if="errors.name">{{errors.name.toString()}}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" v-model="form.email"/>
                            <p class="text-danger mb-0" v-if="errors.email">{{errors.email.toString()}}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" v-model="form.password"/>
                            <p class="text-danger mb-0" v-if="errors.password">{{errors.password.toString()}}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword3" class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputConfirmPassword3" v-model="form.c_password"/>
                            <p class="text-danger mb-0" v-if="errors.c_password">{{errors.c_password.toString()}}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary w-100">Register New Student</button>
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
                name: '',
                email: '',
                password: '',
                c_password: '',
            });

            let errors = ref([])

            const register = async() => {
                await axios.post('/api/register', form).then(response =>{
                    if(response.data.success)
                    {
                        store.dispatch('setToken', response.data.data.token);
                        router.push({name: 'dashboard'})
                    }
                }).catch(e => {
                    errors.value = e.response.data.message
                });
            }
            return{
                form, register, errors
            }
        }
    }
</script>
