@extends('admin.master')

@section('title')
    Edit Unit
@endsection

@section('u-d-block')
    d-block
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Unit</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Unit</a></li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Edit Unit</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('unit.update', ['id' => $unit->id])}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Unit Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" value="{{$unit->name}}" class="form-control" id="nameInput" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Unit Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" value="{{$unit->code}}" class="form-control" id="nameInput" name="code"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="descInput" class="form-label">Category Description</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="descInput" rows="5" name="description">{{$unit->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary px-5">Update Unit</button>
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
