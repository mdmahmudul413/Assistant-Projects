@extends('admin.master')

@section('title')
    Add Home Slider
@endsection

@section('HSA-active')
    active
@endsection

@section('hs-d-block')
    d-block
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Home Slider</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home Slider</a></li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Add New Home Slider</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('slider.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="titleInput" class="form-label">Title</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="titleInput" name="title"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="subTitleInput" class="form-label">Sub Title</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="subTitleInput" name="sub_title"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="price" class="form-label">Price</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" id="price" name="price"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="link" class="form-label">Link</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="link" name="link"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label">Status</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label">Slider Image</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="file" name="image" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary">Add New Slider</button>
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
