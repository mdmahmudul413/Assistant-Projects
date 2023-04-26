@extends('admin.master')

@section('title')
    Add Blog Page
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Blog Form</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <form action="{{route('blog.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tag Name</label>
                            <div class="col-sm-9">
                                <select name="tags[]" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="-- Select Tag --">
                                    @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger mt-1">{{$errors->has('tags') ? $errors->first('tags') : ''}}</span>

                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tag Name</label>
                            <div class="col-sm-9">
                                <select name="categories[]" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="-- Select Category --">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger mt-1">{{$errors->has('categories') ? $errors->first('categories') : ''}}</span>

                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Blog Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="horizontal-firstname-input" name="title"/>
                                <span class="text-danger mt-1">{{$errors->has('title') ? $errors->first('title') : ''}}</span>

                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Blog Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="description" rows="5"></textarea>
                                <span class="text-danger mt-1">{{$errors->has('description') ? $errors->first('description') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Blog Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-password-input" name="image"/>
                                <span class="text-danger mt-1">{{$errors->has('image') ? $errors->first('image') : ''}}</span>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Blog</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
