@extends('website.master')

@section('title')
    Cart Page
@endsection

@section('body')
    <!-- Start of Main -->
    <main class="main cart">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="active"><a href="cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="order.html">Order Complete</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of PageContent -->
        <div class="page-content">
            <div class="container">
                <h4 class="text-center text-success" style="color: #3a963a;font-size: 26px;">{{session('message')}}</h4>
                <div class="row gutter-lg mb-10">
                    <div class="col-lg-8 pr-lg-4 mb-6">
                        <table class="shop-table cart-table">
                            <thead>
                            <tr>
                                <th class="product-name"><span>Product</span></th>
                                <th></th>
                                <th class="product-price"><span>Price (Tk)</span></th>
                                <th class="product-quantity"><span>Quantity</span></th>
                                <th class="product-subtotal"><span>Subtotal (Tk)</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sum = 0)
                            @foreach($cart_products as $cart_product)
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <div style="text-align: end;">
                                            <a href="{{route('cart.remove', ['id' => $cart_product->id])}}" class="btn btn-close"><i class="fas fa-times"></i></a>
                                        </div>
                                        <a href="product-default.html">
                                            <figure>
                                                <img src="{{asset($cart_product->attributes->image)}}" alt="product"
                                                     width="300" height="338">
                                            </figure>
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="{{route('detail', ['id' => $cart_product->id])}}">
                                        {{$cart_product->name}}
                                    </a>
                                    <p class="mb-0">Category: {{$cart_product->attributes->category}}</p>
                                    <p class="mb-0">Brand: {{$cart_product->attributes->brand}}</p>
                                </td>
                                <td class="product-price" style="text-align: center;"><span class="amount">{{$cart_product->price}}</span></td>
                                <td class="product-quantity" style="text-align: center;">
                                    <form action="{{route('cart.update', [$cart_product->id])}}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <input name="quantity" type="number" min="1" value="{{$cart_product->quantity}}" style="width: 85px; text-align: center; color: #565151; font-size: 16px; border:2px solid rgb(237, 115, 29);"/>
                                            <input style="padding: 0px 8px;" class="btn btn-primary" type="submit" value="Update"/>
                                        </div>
                                    </form>
                                </td>
                                <td class="product-subtotal" style="text-align: center;">
                                    <span class="amount">{{$cart_product->quantity * $cart_product->price}}</span>
                                </td>
                            </tr>
                                @php($sum = $sum + ($cart_product->quantity * $cart_product->price))
                            @endforeach
                            </tbody>
                        </table>

                        <div class="cart-action mb-6">
                            <a href="#" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                            <button type="submit" class="btn btn-rounded btn-default btn-clear" name="clear_cart" value="Clear Cart">Clear Cart</button>
                            <button type="submit" class="btn btn-rounded btn-update disabled" name="update_cart" value="Update Cart">Update Cart</button>
                        </div>

                    </div>
                    <div class="col-lg-4 sticky-sidebar-wrapper">
                        <div class="sticky-sidebar">
                            <div class="cart-summary mb-4">
                                <h3 class="cart-title text-uppercase">Cart Summery</h3>
                                <hr class="divider">
                                <div class="cart-subtotal d-flex align-items-center justify-content-between mb-1">
                                    <label class="ls-25">Cart Subtotal (Tk)</label>
                                    <span>{{$sum}}</span>
                                </div>
                                <div class="cart-subtotal d-flex align-items-center justify-content-between mb-1">
                                    <label class="ls-25">Tax Amount (Tk)</label>
                                    <span>{{$tax = $sum * .15}}</span>
                                </div>
                                <div class="cart-subtotal d-flex align-items-center justify-content-between mb-1">
                                    <label class="ls-25">Shipping (Tk)</label>
                                    <span>{{$shipping = 250}}</span>
                                </div>
                                <hr class="divider mb-6">
                                <div class="order-total d-flex justify-content-between align-items-center">
                                    <label>Total Payable (Tk)</label>
                                    <span class="ls-50">{{$totalPayable = $sum + $tax + $shipping}}</span>
                                </div>
                                <a href="{{route('checkout')}}"
                                   class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                    Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                            <form class="coupon" style="border:  2px solid #e2e2e2; padding: 20px;">
                                <h5 class="title coupon-title font-weight-bold text-uppercase">Coupon Discount</h5>
                                <hr class="divider mb-6">
                                <input type="text" class="form-control mb-4" placeholder="Enter coupon code here..." required />
                                <button class="btn btn-dark btn-rounded">Apply Coupon</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
    <!-- End of Main -->
@endsection
