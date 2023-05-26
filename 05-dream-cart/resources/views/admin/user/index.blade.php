@extends('admin.master')

@section('title')
    Add User Page
@endsection

@section('USI-active')
    active
@endsection

@section('us-d-block')
    d-block
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add User</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <h4 class="text-center text-success">{{session('message')}}</h4>
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add New User</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('user.create')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">User Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="nameInput" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="emailInput" class="form-label">User Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" id="emailInput" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="passInput" class="form-label">User Password</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" id="passInput" name="password"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="descInput" class="form-label">User Type</label>
                                </div>
                                <div class="col-lg-9">
                                    <select name="user_type" class="form-control">
                                        <option value=""> -- Select User -- </option>
                                        <option value="1"> Super Admin </option>
                                        <option value="2"> Admin </option>
                                        <option value="3"> Executive </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary">Add New User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection
