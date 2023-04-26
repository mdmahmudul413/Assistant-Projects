@extends('website.master')

@section('title')
    Checkout Page
@endsection

@section('body')
    <!-- Start of Main -->
    <main class="main checkout">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="passed"><a href="cart.html">Shopping Cart</a></li>
                    <li class="active"><a href="checkout.html">Checkout</a></li>
                    <li><a href="order.html">Order Complete</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->


        <!-- Start of PageContent -->
        <div class="page-content">
            <div class="container">
                <div class="coupon-toggle">
                    Have a coupon? <a href="#"
                                      class="show-coupon font-weight-bold text-uppercase text-dark">Enter your
                        code</a>
                </div>
                <div class="coupon-content mb-4">
                    <p>If you have a coupon code, please apply it below.</p>
                    <div class="input-wrapper-inline">
                        <input type="text" name="coupon_code" class="form-control form-control-md mr-1 mb-2" placeholder="Coupon code" id="coupon_code">
                        <button type="submit" class="btn button btn-rounded btn-coupon mb-2" name="apply_coupon" value="Apply coupon">Apply Coupon</button>
                    </div>
                </div>
                <form id="checkoutForm" class="form checkout-form" action="{{route('new.order')}}" method="post">
                    @csrf
                    <div class="row mb-9">
                        <div class="col-lg-7 pr-lg-4 mb-4">
                            <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                Billing Details
                            </h3>
                            @if(Session::get('customer_id'))
                                <div class="row gutter-sm mb-3">
                                    <div class="col-xs-12">
                                        <label>Delivery Address <span style="color: red;">*</span></label>
                                        <textarea name="delivery_address" class="form-control mb-0" cols="30" rows="5"></textarea>
                                        <span style="color: red;">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                                    </div>
                                </div>
                            @else
                                <div class="row gutter-sm mb-3">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Full Name <span style="color: red;">*</span></label>
                                            <input id="name" type="text" class="form-control form-control-md mb-0 text-dark" name="name"/>
                                            <span id="nameError" style="color: red;">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-6">
                                        <label>Email address <span style="color: red;">*</span></label>
                                        <input type="email" class="form-control form-control-md mb-0 text-dark" id="email" name="email"/>
                                        <span id="emailError" style="color: red;">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                    <div class="col-xs-6 mb-3">
                                        <label>Contact Number <span style="color: red;">*</span></label>
                                        <input id="mobile" type="number" class="form-control form-control-md mb-0 text-dark" name="mobile"/>
                                        <span id="mobileError" style="color: red;">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row gutter-sm mb-3">
                                    <div class="col-xs-12">
                                        <label>Delivery Address <span style="color: red;">*</span></label>
                                        <textarea name="delivery_address" class="form-control mb-0 text-dark" cols="30" rows="5"></textarea>
                                        <span style="color: red;">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="order-summary">
                                <table class="order-table">
                                    <thead></thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <tr class="shipping-methods">
                                        <td colspan="2" class="text-left" style="padding: 0px;">
                                            <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Payment Method
                                            </h4>
                                            <ul id="shipping-method" class="mb-4">
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" value="1" id="free-shipping" class="custom-control-input" name="payment_method" checked/>
                                                        <label for="free-shipping" class="custom-control-label color-dark">Cash on Delivery</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <input type="radio" value="2" id="local-pickup" class="custom-control-input" name="payment_method"/>
                                                        <label for="local-pickup" class="custom-control-label color-dark">Online</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tfoot>
                                </table>
                                <div class="form-group place-order pt-6">
                                    <button id="placeOrderBtn" type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                            <div class="order-summary-wrapper sticky-sidebar">
                                <h3 class="title text-uppercase ls-10">Your Order</h3>
                                <div class="order-summary">
                                    <table class="order-table">
                                        <thead>
                                        <tr>
                                            <th colspan="2">
                                                <b>Product</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($sum = 0)
                                        @foreach(Cart::getContent() as $cart_item)
                                            <tr class="bb-no">
                                                <td class="product-name">{{$cart_item->name}} <i
                                                        class="fas fa-times"></i> <span
                                                        class="product-quantity">{{$cart_item->quantity}}</span></td>
                                                <td class="product-total">{{$cart_item->price}}</td>
                                            </tr>
                                            @php($sum = $sum + ($cart_item->price * $cart_item->quantity))
                                        @endforeach

                                        <tr class="cart-subtotal">
                                            <td>
                                                <b>Cart Total</b>
                                            </td>
                                            <td>
                                                <b>৳{{$sum}}</b>
                                            </td>
                                        </tr>

                                        <tr class="bb-no">
                                            <td class="product-name">Cart Total</td>
                                            <td class="product-total">{{$sum}}</td>
                                        </tr>
                                        <tr class="bb-no">
                                            <td class="product-name">Tax Amount (15%)</td>
                                            <td class="product-total">{{$tax = $sum * .15}}</td>
                                        </tr>
                                        <tr class="bb-no">
                                            <td class="product-name">Shipping Cost</td>
                                            <td class="product-total">{{$shipping = 250}}</td>
                                        </tr>

                                        <tr class="cart-subtotal bb-no">
                                            <td>
                                                <b>Total Payable</b>
                                            </td>
                                            <td>
                                                <b>৳{{$totalPayable = $sum + $tax + $shipping}}</b>
                                            </td>
                                        </tr>
                                        <?php
                                            Session::put('order_total', $totalPayable);
                                            Session::put('tax_total', $tax);
                                            Session::put('shipping_total', $shipping);
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
    <!-- End of Main -->
@endsection
