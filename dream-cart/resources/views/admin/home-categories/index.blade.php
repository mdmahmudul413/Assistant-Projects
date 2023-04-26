@extends('admin.master')

@section('title')
    Manage Home Categories
@endsection

@section('HCMI-active')
    active
@endsection

@section('hcf-d-block')
    d-block
@endsection

@section('body')
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            color: black;
        }
    </style>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Manage Home Categories</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home Categories</a></li>
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
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add New Home Category</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('home.categories.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Choose Categories</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="select_cat form-select" aria-label="Default select example" name="categories[]" multiple="multiple">
                                        @foreach($categories as $category)
                                            @foreach($select_cat as $item)
                                                @if($category->id == $item)
                                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                @endif
                                            @endforeach
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">No. of Products</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" id="nameInput" value="{{$qty}}" name="qty"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary">Update Home Category Section</button>
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

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.select_cat').select2();
        });
    </script>
@endpush
