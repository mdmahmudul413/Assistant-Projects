<template>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Departments Information</h5>
                <!-- Button trigger modal -->
                <button @click="formReset" type="button" class="btn btn-dark btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Department
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Department</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3">
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
                                        <label for="credit" class="form-label">Total Credit</label>
                                        <input type="number" class="form-control" id="credit" v-model="form.total_credit">
                                        <p class="text-danger mb-0" v-if="errors.total_credit">{{errors.total_credit.toString()}}</p>
                                    </div>
                                    <div class="col-12">
                                        <label for="departmentHead" class="form-label">Department Head</label>
                                        <input type="text" class="form-control" id="departmentHead" v-model="form.department_head">
                                        <p class="text-danger mb-0" v-if="errors.department_head">{{errors.department_head.toString()}}</p>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button v-if="department_id == ''" type="button" class="btn btn-primary" @click="submitDepartment">Add New Department</button>
                                <button v-else type="button" class="btn btn-primary" @click="updateDepartment">Update Department</button>
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
                        <th scope="col">Total Credit</th>
                        <th scope="col">Department Head</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="department in departments" :key="department.id">
                        <th scope="row">{{department.id}}</th>
                        <td>{{department.name}}</td>
                        <td>{{department.email}}</td>
                        <td>{{department.mobile}}</td>
                        <td>{{department.total_credit}}</td>
                        <td>{{department.department_head}}</td>
                        <td>
                            <button style="margin-right: 5px;" @click="editDepartment(department)" type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                            <button @click="deleteDepartment(department.id)" type="button" class="btn btn-danger btn-sm">Delete</button>
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
            const departments = ref([]);
            const department_id = ref([]);
            const form = reactive({
                name: '',
                email: '',
                mobile: '',
                total_credit: '',
                department_head: '',
            });
            let errors = ref([])

            const getDepartments = async() =>{
                let response = await axios.get('api/get-departments');
                departments.value = response.data;
            }

            const submitDepartment = async() =>{
                try {
                    await axios.post('api/new-department', form)
                    getDepartments()
                    formReset()
                    const myModel = bootstrap.Modal.getOrCreateInstance('#exampleModal');
                    myModel.hide();
                }
                catch (e) {
                    errors.value = e.response.data.message;
                }
            }

            const deleteDepartment = async(id) =>{
                if(confirm('Are you sure to delete this entry?')){
                    try {
                        await axios.delete('api/delete-department/' + id)
                        getDepartments()
                    }
                    catch (e) {
                        errors.value = e.response.data.message;
                    }
                }
            }

            const updateDepartment = async() =>{
                try {
                    await axios.patch('api/update-department/' + department_id.value, form)
                    getDepartments()
                    formReset()
                    const myModel = bootstrap.Modal.getOrCreateInstance('#exampleModal');
                    myModel.hide();
                }
                catch (e) {
                    errors.value = e.response.data.message;
                }
            }

            const editDepartment = (department) => {
                department_id.value = department.id
                form.name = department.name
                form.email = department.email
                form.mobile = department.mobile
                form.total_credit = department.total_credit
                form.department_head = department.department_head
            }

            onMounted(getDepartments);

            const formReset = () => {
                form.name = ''
                form.email = ''
                form.mobile = ''
                form.total_credit = ''
                form.department_head = ''
                department_id.value = ''
            }

            return{
                departments,
                form,
                submitDepartment,
                errors,
                editDepartment,
                department_id,
                updateDepartment,
                formReset,
                deleteDepartment
            }
        }
    }
</script>
