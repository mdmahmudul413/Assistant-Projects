@extends('admin.master')

@section('title')
    Edit Sub Category
@endsection

@section('sc-d-block')
    d-block
@endsection

@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Sub Category</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sub Category</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Edit Sub Category</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Category Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $sub_category->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Sub Category Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" value="{{$sub_category->name}}" class="form-control" id="nameInput" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="descInput" class="form-label">Sub Category Description</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="descInput" rows="5" name="description">{{$sub_category->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="descInput" class="form-label">Sub Category Image</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="file" name="image" class="form-control"/>
                                    <img class="mt-3" src="{{asset($sub_category->image)}}" alt="Category Image" height="100" width="130"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary px-5">Update Sub Category</button>
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
