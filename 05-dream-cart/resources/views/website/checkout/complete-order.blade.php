@extends('website.master')

@section('title')
    Complete Order Page
@endsection

@section('body')
    @if(Session::get('message'))
        <!-- Start of Main -->
        <main class="main order">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="cart.html">Shopping Cart</a></li>
                        <li class="passed"><a href="checkout.html">Checkout</a></li>
                        <li class="active"><a href="order.html">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <div class="order-success text-center font-weight-bolder text-dark">
                        <i class="fas fa-check"></i>
                        Thank you. Your order has been received. We will contact you vary soon.
                    </div>
                    <!-- End of Order Success -->

                    <a href="{{route('home')}}" class="btn btn-dark btn-rounded btn-icon-left btn-back mt-6"><i class="w-icon-long-arrow-left"></i>Back To List</a>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->
    @else
        <!-- Start of Main -->
        <main class="main order mt-10">
            <!-- Start of PageContent -->
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <div class="order-success text-center font-weight-bolder text-dark">
                        <i class="fas fa-check"></i>
                        Thanks for your previous order. Hope you make another soon.
                    </div>
                    <!-- End of Order Success -->
                    <a href="{{route('home')}}" class="btn btn-dark btn-rounded btn-icon-left btn-back mt-6"><i class="w-icon-long-arrow-left"></i>Back To List</a>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->
    @endif

@endsection
