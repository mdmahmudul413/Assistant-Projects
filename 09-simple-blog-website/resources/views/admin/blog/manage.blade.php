@extends('admin.master')

@section('title')
    Manage Category Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Category Information</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Visibility</th>
                            <th>Is Approve</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ Str::limit($blog->title, 16, '...') }}</td>
                            <td>{{ $blog->user->name }}</td>
                            <td>{{$blog->view_count}}</td>
                            <td>{{$blog->is_approved == 1 ? 'Approved' : 'Pending'}}</td>
                            <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td>
                                <img src="{{asset($blog->image)}}" alt="" height="50" width="90">
                            </td>
                            
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('blog.detail', ['id' => $blog->id])}}" title="Blog Detail">
                                    <i class="fa fa-book-open"></i>
                                </a>
                                <a class="btn btn-dark btn-sm" href="{{route('blog.edit', ['id' => $blog->id])}}" title="Blog Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="{{route('blog.delete', ['id' => $blog->id])}}" title="Blog Delete" onclick="return confirm('Are you sure to delete this category?')">
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
