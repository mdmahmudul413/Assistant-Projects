@extends('admin.master')

@section('title')
    Edit Brand
@endsection

@section('mo-d-block')
    d-block
@endsection

@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Order</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Edit</a></li>
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
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit Order Form</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{route('admin.order-update', ['id' => $order->id])}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Order No</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" value="{{$order->id}}" class="form-control" id="nameInput" readonly/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Order Status</label>
                                </div>
                                <div class="col-lg-9">
                                    <select name="order_status" class="form-control">
                                        <option value=""> -- Select Order Status -- </option>
                                        <option value="Pending" {{$order->order_status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                        <option value="Processing" {{$order->order_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                        <option value="Complete" {{$order->order_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                        <option value="Cancel" {{$order->order_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label">Delivery Address</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" name="delivery_address">{{$order->delivery_address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label">Order Total (Tk)</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" value="{{$order->order_total}}" class="form-control" name="order_total" readonly/>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-sm-3 col-form-label">Payment Amount (Tk)</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="payment_amount" value="{{$order->order_total}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label class="form-label"></label>
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary px-5">Update Order</button>
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
