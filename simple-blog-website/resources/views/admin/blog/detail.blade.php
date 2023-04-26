@extends('admin.master')

@section('title')
    Blog Detail Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Order Basic Information</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table class="table table-striped table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Blog Id</th>
                            <td>{{$blog->id}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$blog->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Blog Author</th>
                            <td>{{$blog->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Blog Title</th>
                            <td>{{$blog->title}}</td>
                        </tr>
                        <tr>
                            <th>Blog Image</th>
                            <td>
                                <img src="{{ asset('/') }}{{ $blog->image }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Visibility</th>
                            <td>{{$blog->view_count}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                        </tr>
                        <tr>
                            <th>Is Approved</th>
                            <td>{{$blog->is_approved == 1 ? 'Approved' : 'Pending'}}</td>

                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4>Blog Description</h4>
                    <p>{!! $blog->description !!}</p>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
