<template>
    <div class="container">
        <h4>Image Upload</h4>
        <p v-if="success.value == true">successfully uploaded</p>
        <form enctype="multipart/form-data">
            <input type="text" v-model="form.name">
            <input type="file" @change="onChange"/>
            <button @click="submitForm" type="button">Upload</button>
        </form>
    </div>
</template>

<script>
    import {reactive, ref} from 'vue'
    export default {
        setup(){
            const form = reactive({
                name: '',
            });
            const file = ref('')
            const success = ref(false)
            const onChange = (e) => {
                file.value = e.target.files[0];
            }

            const submitForm = ()=>{
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }

                let data = new FormData();

                data.append('file', file.value);
                data.append('name', form.name);

                axios.post('/api/upload', data, config)
                .then(response => {
                    success.value = true;
                })
                .catch(function(error) {
                    console.log(error);
                    output = error;
                })
            }

            return{
                onChange,
                submitForm,
                success,
                form,
            }
        }
    }
</script>
