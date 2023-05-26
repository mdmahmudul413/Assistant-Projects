@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('PI-active')
    active
@endsection

@section('p-d-block')
    d-block
@endsection

@section('body')
    <style>
        .note-editable{
            background-color: white;
        }
    </style>

    <!--  Summer Note  -->
    <script src="{{asset('/')}}admin/assets/libs/summernote/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="{{asset('/')}}admin/assets/libs/summernote/summernote-lite.min.js"></script>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add product</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">product</a></li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Add New product</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Category Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Sub Category Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-select" aria-label="Default select example" name="sub_category_id">
                                        <option selected>-- Select Sub Category --</option>
                                        @foreach($sub_categories as $sub_category)
                                            <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Brand Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-select" aria-label="Default select example" name="brand_id">
                                        <option selected>-- Select Sub Category --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Unit Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-select" aria-label="Default select example" name="unit_id">
                                        <option selected>-- Select Sub Category --</option>
                                        @foreach($units as $unit)
                                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Product Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="nameInput" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="codeInput" class="form-label">Product Code</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="codeInput" name="code"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="stockInput" class="form-label">Stock Amount</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" id="stockInput" name="stock_amount"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="priceInput" class="form-label">Product Price (Tk)</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" id="priceInput" name="regular_price" placeholder="Regular Price"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="sellingPrice" class="form-label">Selling Price (Tk)</label>
                                </div>
                                <div class="col-lg-9">
                                    <input value="0" type="number" class="form-control" id="sellingPrice" name="selling_price"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="descInput" class="form-label">Short Description</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" name="short_description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="longDescInput" class="form-label">Long Description</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="summernote" name="long_description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label class="form-label">Product Image</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="file" name="image" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label class="form-label">Other Image</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="file" name="other_image[]" class="form-control" multiple/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary">Add New Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <!--  Summer Note  -->
    <script>
        $('#summernote').summernote({
            placeholder: 'Write your product details here',
            tabsize: 3,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
