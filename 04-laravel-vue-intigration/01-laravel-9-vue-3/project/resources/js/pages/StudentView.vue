<template>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Students Information</h5>
                <!-- Button trigger modal -->
                <button @click="formReset" type="button" class="btn btn-dark btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Student
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Student</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" v-model="form.name">
                                        <p class="text-danger mb-0" v-if="errors.name">{{errors.name.toString()}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" v-model="form.email">
                                        <p class="text-danger mb-0" v-if="errors.email">{{errors.email.toString()}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="number" class="form-control" id="mobile" v-model="form.mobile">
                                        <p class="text-danger mb-0" v-if="errors.mobile">{{errors.mobile.toString()}}</p>
                                    </div>
                                    <div class="col-12">
                                        <label for="credit" class="form-label">Department</label>
                                        <input type="text" class="form-control" id="credit" v-model="form.department">
                                        <p class="text-danger mb-0" v-if="errors.department">{{errors.department.toString()}}</p>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Photo</label>
                                        <input type="file" class="form-control" @change="onChange">
                                        <p class="text-danger mb-0" v-if="errors.file">{{errors.file.toString()}}</p>
                                    </div>
                                    <div class="col-12">
                                        <label for="guardianMobile" class="form-label">Guardian Mobile</label>
                                        <input type="text" class="form-control" id="guardianMobile" v-model="form.guardian_mobile">
                                        <p class="text-danger mb-0" v-if="errors.guardian_mobile">{{errors.guardian_mobile.toString()}}</p>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button v-if="student_id == ''" type="button" class="btn btn-primary" @click="submitNewStudent">Add New Student</button>
                                <button v-else type="button" class="btn btn-primary" @click="updateStudent">Update Student</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Department</th>
                        <th scope="col">Image</th>
                        <th scope="col">Guardian Mobile</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="student in students" :key="student.id">
                        <th scope="row">{{student.id}}</th>
                        <td>{{student.name}}</td>
                        <td>{{student.email}}</td>
                        <td>{{student.mobile}}</td>
                        <td>{{student.department}}</td>
                        <td>
                            <img :src="student.image" alt="" height="70" width="80"/>
                        </td>
                        <td>{{student.guardian_mobile}}</td>
                        <td>
                            <button style="margin-right: 5px;" @click="editStudent(student)" type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                            <button @click="deleteStudent(student.id)" type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import {ref, onMounted, reactive} from 'vue'
    import axios from 'axios'
    export default {
        setup(){
            const students = ref([]);
            const student_id = ref([]);
            const form = reactive({
                name: '',
                email: '',
                mobile: '',
                department: '',
                guardian_mobile: '',
            });
            const file = ref('')
            const success = ref(false)

            let errors = ref([])

            const onChange = (e) => {
                file.value = e.target.files[0];
            }

            const getStudents = async() =>{
                let response = await axios.get('api/get-students');
                students.value = response.data;
            }

            const submitNewStudent = ()=>{
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }

                let data = new FormData();

                data.append('file', file.value);
                data.append('name', form.name);
                data.append('email', form.email);
                data.append('mobile', form.mobile);
                data.append('department', form.department);
                data.append('guardian_mobile', form.guardian_mobile);

                axios.post('/api/new-student', data, config)
                    .then(response => {
                        success.value = true;
                        getStudents()
                        formReset()
                        const myModel = bootstrap.Modal.getOrCreateInstance('#exampleModal');
                        myModel.hide();
                    })
                    .catch(function(error) {
                        errors.value = error.response.data.errors;
                    })
            }

            const deleteStudent = async(id) =>{
                if(confirm('Are you sure to delete this entry?')){
                    try {
                        await axios.delete('api/delete-student/' + id)
                        getStudents()
                    }
                    catch (e) {
                        errors.value = e.response.data.message;
                    }
                }
            }

            const editStudent = (student) => {
                student_id.value     = student.id
                form.name            = student.name
                form.email           = student.email
                form.mobile          = student.mobile
                form.department      = student.department
                form.image           = student.image
                form.guardian_mobile = student.guardian_mobile
            }

            const updateStudent = async() =>{
                // try {
                //     await axios.patch('api/update-student/' + student_id.value, form)
                //     getStudents()
                //     formReset()
                //     const myModel = bootstrap.Modal.getOrCreateInstance('#exampleModal');
                //     myModel.hide();
                // }
                // catch (e) {
                //     errors.value = e.response.data.message;
                // }

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }

                let data = new FormData();

                data.append('file', file.value);
                data.append('name', form.name);
                data.append('email', form.email);
                data.append('mobile', form.mobile);
                data.append('department', form.department);
                data.append('guardian_mobile', form.guardian_mobile);

                axios.patch('/api/update-student/' + student_id.value, data, config)
                    .then(response => {
                        success.value = true;
                        getStudents()
                        formReset()
                        const myModel = bootstrap.Modal.getOrCreateInstance('#exampleModal');
                        myModel.hide();
                    })
                    .catch(function(error) {
                        errors.value = error.response.data.errors;
                    })
            }

            onMounted(getStudents);

            const formReset = () => {
                student_id.value = ''
                form.name = ''
                form.email = ''
                form.mobile = ''
                form.department = ''
                form.image = ''
                form.guardian_mobile = ''
            }

            return{
                students,
                form,
                submitNewStudent,
                errors,
                editStudent,
                student_id,
                updateStudent,
                formReset,
                deleteStudent,
                onChange,
                success,
            }
        }
    }
</script>
