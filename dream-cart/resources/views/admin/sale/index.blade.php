@extends('admin.master')

@section('title')
    Manage Home Sale
@endsection

@section('AS-active')
    active
@endsection

@section('as-d-block')
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
                <h4 class="mb-sm-0">Manage Home Sale</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home Sale</a></li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Sale Setting</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('admin.update.sale')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Status</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-select" name="status">
                                        <option value="0" {{$sale->status == 0 ? 'selected' : ''}}>Inactive</option>
                                        <option value="1" {{$sale->status == 1 ? 'selected' : ''}}>Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="sale_date" class="form-label">Sale Date</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="datetime-local" value="{{$sale->sale_date}}" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY/MM/DD H:M:S"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary">Add New Sale Timer</button>
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

