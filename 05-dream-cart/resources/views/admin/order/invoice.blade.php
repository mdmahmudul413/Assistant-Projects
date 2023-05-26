@extends('admin.master')

@section('title')
    Order Invoice Page
@endsection

@section('mo-d-block')
    d-block
@endsection

@section('body')
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Order Invoice</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order</a></li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="invoice-box">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td class="title">
                                        <h1>LOGO</h1>
                                    </td>

                                    <td>
                                        Invoice #: 000{{$order->id}}<br />
                                        Order Date: {{$order->order_date}}<br />
                                        Invoice Date: {{date('y-m-d')}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="information">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td>
                                        <h4>Billing Info</h4>
                                        {{$order->customer->name}}<br />
                                        {{$order->customer->email}}<br />
                                        {{$order->customer->mobile}}
                                    </td>

                                    <td>
                                        <h4>Delivery Info</h4>
                                        {{$order->delivery_address}}<br />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="heading">
                        <td>Payment Method</td>

                        <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online'}}</td>
                    </tr>

                    <tr class="details">
                        <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online'}}</td>

                        <td>{{number_format($order->order_total)}}</td>
                    </tr>

                    <tr class="heading">
                        <td>Item info</td>

                        <td>Price (Tk)</td>
                    </tr>
                    @php($sum = 0)
                    @foreach($order->orderDetails as $item)
                        <tr class="item">
                            <td><b>Name: </b>{{$item->product_name}}, <br> <b>Unit Price: </b>{{$item->product_price}}, <br> <b>Quantity: </b>{{$item->product_quantity}}</td>

                            <td>{{$item->product_quantity * $item->product_price}}</td>
                        </tr>
                        @php($sum = $sum + $item->product_quantity * $item->product_price)
                    @endforeach
                    <tr class="">
                        <td></td>

                        <td><h5>Cart Total: {{$sum}}</h5></td>
                    </tr>
                    <tr class="heading">
                        <td>Other Charges</td>

                        <td>Price (Tk)</td>
                    </tr>
                    <tr class="information">
                        <td>Tax Total (15%)</td>

                        <td>{{number_format($tax = $sum * 0.15)}}</td>
                    </tr>
                    <tr class="information">
                        <td>Shipping Total</td>

                        <td>{{$shipping =  250}}</td>
                    </tr>
                    <tr class="item">
                        <td></td>

                        <td></td>
                    </tr>
                    <tr class="">
                        <td></td>

                        <td><h4>Total Payable: {{number_format($totalPayable = $sum + $tax + $shipping)}}</h4></td>
                    </tr>
                </table>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
