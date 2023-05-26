@extends('admin.master')

@section('title')
    Manage User Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All User Information</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                        <img src="{{asset('/')}}default-profile-image/default.jpg" alt="User Image" height="90" width="90"/>
                                    @else
                                    <img src="{{asset($user->profile_photo_path)}}" alt="Category Image" height="90" width="90"/>
                                    @endif
                                </td>
                                @if($user->user_type == 1)
                                    <td>Super Admin</td>
                                @elseif($user->user_type == 2)
                                    <td>Editor</td>
                                @endif
                                <td>
                                    <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-dark btn-sm">
                                        <i class="fa fa-edit"></i></i>
                                    </a>
                                    <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure to delete this user?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
