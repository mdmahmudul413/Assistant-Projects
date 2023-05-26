@extends('admin.master')

@section('title')
    Manage Brand
@endsection

@section('USM-active')
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
                <h4 class="mb-sm-0">Manage User</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                        <li class="breadcrumb-item active">Manage</li>
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
                <div class="card-body">
                    <h4 class="card-title mb-3">All User Information</h4>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>User type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->profile_photo_path == null)
                                        <img src="{{asset('/')}}default-profile-image/default.jpg" alt="Category Image" height="90" width="90"/>
                                    @else
                                    <img src="{{asset($user->profile_photo_path)}}" alt="Category Image" height="90" width="90"/>
                                    @endif
                                </td>
                                @if($user->user_type == 1)
                                    <td>Super Admin</td>
                                @elseif($user->user_type == 2)
                                    <td>Admin</td>
                                @elseif($user->user_type == 3)
                                    <td>Executive</td>
                                @endif
                                <td>
                                    <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-primary btn-sm">
                                        <i class="ri ri-pencil-fill"></i>
                                    </a>
                                    <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure to delete this entry?')">
                                        <i class="ri ri-delete-bin-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
