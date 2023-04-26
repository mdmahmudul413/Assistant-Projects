@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('PM-active')
    active
@endsection

@section('p-d-block')
    d-block
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Manage Product</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
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
                <div class="card-body">
                    <h4 class="card-title mb-3">All Product Information</h4>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>product Code</th>
                            <th>Regular Price (Tk)</th>
                            <th>Selling Price (Tk)</th>
                            <th>Image</th>
                            <th>Stock Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->regular_price}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="Product Image" height="70" width="70"/>
                            </td>
                            <td>{{$product->stock_amount}}</td>
                            <td>{{$product->status == 1 ? 'Published' : ''}}</td>
                            <td>
                                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class='ri ri-edit-box-fill text-primary' style="font-size: 40px;"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0 fw-semibold fs-15"> Actions </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-2">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-info btn-sm" title="Detail">
                                                        <i class="ri ri-book-open-fill text-primary" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-primary btn-sm" title="Edit">
                                                        <i class="ri ri-pencil-fill text-secondary" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you Sure to delete this entry?')">
                                                        <i class="ri ri-delete-bin-fill text-danger" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>product Code</th>
                            <th>Regular Price (Tk)</th>
                            <th>Selling Price (Tk)</th>
                            <th>Stock Amount</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
