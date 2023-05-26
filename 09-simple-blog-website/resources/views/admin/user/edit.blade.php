@extends('admin.master')

@section('title')
    Edit User Page
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add User Form</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <form action="{{route('user.update', ['id' => $user->id])}}" method="POST">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input value="{{ $user->name }}" type="text" class="form-control" id="horizontal-firstname-input" name="name"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">User Email</label>
                            <div class="col-sm-9">
                                <input type="email" value="{{ $user->email }}" class="form-control" id="horizontal-email-input" name="email"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label text-danger">User Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-email-input" placeholder="If you want to change the user password, then fill it. Otherwise skip this field." name="password"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">User Type</label>
                            <div class="col-sm-9">
                                <select name="user_type" class="form-control">
                                    <option value=""> -- Select User -- </option>
                                    <option value="1" {{$user->user_type == 1 ? 'selected' : ''}}> Super Admin </option>
                                    <option value="2" {{$user->user_type == 2 ? 'selected' : ''}}> Editor </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
