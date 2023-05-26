@extends('website.master')

@section('title')
    Products On Sale
@endsection

@section('body')
    <style>
        /* CSS for pagination */
        .pl-4, .px-4 {
            padding: 1rem !important;
        }
        .pb-2, .py-2 {
            padding: 1rem !important;
        }
        .pt-2, .py-2 {
            padding: 1rem !important;
        }
        .bg-white {
            color: white;
            margin: 2px;
            background-color: rgb(237, 115, 29) !important;
            font: 14px bold, "ARIAL";
        }
        .border {
            border: 1px solid #dee2e6 !important;
        }
        nav svg {
            height: 20px;
        }
        svg {
            overflow: hidden;
            vertical-align: middle;
        }
        .wrap-pagination-info {
            margin-top: 46px;
            border-top: 1px solid #e6e6e6;
            padding-top: 10px;
        }
        .wrap-pagination-info .hidden {
            display: block !important;
            margin-top: 30px;
            margin-left: -3px;
        }
        .wrap-pagination-info .rounded-l-md {
            margin-left: 5px;
        }
        .wrap-pagination-info .rounded-r-md {
            margin-left: 5px;
        }
        p.text-sm.text-gray-700.leading-5 {
            float: right;
            margin-top: -50px;
        }
        .items-center a:focus {
            color: white;
        }
        .items-center a:hover {
            color: white;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
    <!-- Start of Main -->
    <main class="main">
        <!-- Start of Page Content -->
        <div class="page-content mb-10 mt-2">
            <div class="container">
                <!-- Start of Shop Banner -->
                <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                     style="background-image: url({{asset('/')}}website/assets/images/shop/banner1.jpg); background-color: #FFC74E;">
                    <div class="banner-content">
                        <h3 class="banner-title text-white font-weight-bolder ls-normal">
                            Products on Sale
                        </h3>
                    </div>
                </div>
                <!-- End of Shop Banner -->

                <!-- Start of Shop Content -->
                <div class="shop-content">
                    <!-- Start of Shop Main Content -->
                    <div class="main-content">
                        <div class="product-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            @foreach($products as $product)
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <div class="product-label-group">
                                                <label style="background-color: red;" class="product-label label-discount">Sale</label>
                                            </div>
                                            <a href="{{route('detail', $product->id)}}">
                                                <img src="{{asset($product->image)}}" alt="Search Product" width="300" height="338" />
                                            </a>
                                            <form action="{{route('cart', ['id' => $product->id])}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="quantity" value="1"/>
                                                <div class="product-action-horizontal">
                                                    <button type="submit" class="btn-product-icon w-icon-cart"
                                                            title="Add to cart"></button>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                       title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                       title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                       title="Quick View"></a>
                                                </div>
                                            </form>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="{{route('category', $product->category->id)}}">{{$product->category->name}}</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="{{route('detail', $product->id)}}">{{$product->name}}</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    <ins class="new-price">Tk {{$product->selling_price}}</ins><del class="old-price">Tk {{$product->regular_price}}</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- End of Shop Main Content -->
                        <div class="wrap-pagination-info">
                            {{$products->links()}}
                        </div>
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
    </main>
    <!-- End of Main -->
@endsection
