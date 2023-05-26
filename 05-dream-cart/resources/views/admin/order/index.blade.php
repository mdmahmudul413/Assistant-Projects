@extends('admin.master')

@section('title')
    Manage Order Page
@endsection

@section('MO-active')
    active
@endsection

@section('mo-d-block')
    d-block
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Manage Order</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Manage</a></li>
                        <li class="breadcrumb-item active">Order</li>
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
                    <h4 class="card-title mb-3">All Brand Information</h4>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Order Id</th>
                            <th>Order Total (Tk)</th>
                            <th>Customer Info</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->order_total}}</td>
                            <td>
                                {{'Name: ' . $order->customer->name}}<br>
                                {{'Contact: ' . $order->customer->mobile}}
                            </td>
                            <td>{{$order->order_date}}</td>
                            <td>{{$order->order_status}}</td>
                            <td>{{$order->payment_method == 1 ? 'Cash on Delivery' : 'Online'}}</td>
                            <td>{{$order->payment_status}}</td>
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
                                                    <a title="Order Detail" href="{{route('admin.order-detail', ['id' => $order->id])}}" class="dropdown-icon-item btn" style="border: none;">
                                                        <i class="ri ri-book-open-fill text-secondary" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a title="Order Invoice" href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="dropdown-icon-item btn" style="border: none;">
                                                        <i class="ri ri-file-paper-2-fill text-primary" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a title="Print Invoice" target="_blank" href="{{route('admin.print-invoice', ['id' => $order->id])}}" class="dropdown-icon-item btn" style="border: none;">
                                                        <i class="ri ri-printer-fill text-success" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row g-0">
                                                <div class="col">
                                                    <a title="Order Edit" href="{{route('admin.order-edit', ['id' => $order->id])}}" class="dropdown-icon-item btn {{$order->order_status == 'complete' ? 'disabled' : ''}}" style="border: none;">
                                                        <i class="ri ri-edit-2-fill text-dark" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a title="Order Delete" href="{{route('admin.order-delete', ['id' => $order->id])}}" class="dropdown-icon-item btn {{$order->order_status == 'Pending' || $order->order_status == 'Complete' || $order->order_status == 'Processing' ? 'disabled' : ''}}" style="border: none;" onclick="return confirm('Are you Sure to delete this entry?')">
                                                        <i class="ri ri-delete-bin-fill text-danger" style="font-size: 30px;"></i>
                                                    </a>
                                                </div>
                                                <div class="col"></div>
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
                            <th>Order Id</th>
                            <th>Order Total (Tk)</th>
                            <th>Customer Info</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
