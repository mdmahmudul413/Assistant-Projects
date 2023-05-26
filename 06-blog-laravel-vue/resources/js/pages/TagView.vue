<template>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Tag</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Tag</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Tag Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Tag</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" name="name" placeholder="Enter your tag name" v-model="data.name"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="addTag">Add New Tag</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex" style="justify-content: space-between;">
            <h1 class="m-0">Tags</h1>
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Tag</button>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>1/2/22</td>
                        <td>
                            <button type="button" class="btn btn-dark btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm mx-2">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            data: {
                name: '',
            }
        }
    },

    methods: {
        async addTag(){
            try {
                await axios.post('api/create-tag', this.data.name);
                const myModel = bootstrap.Modal.getOrCreateInstance('#exampleModal');
                myModel.hide();
            }
            catch (e) {
                console.log(e);
            }
        }
    
    },

    created() {
        
    },
}
</script>