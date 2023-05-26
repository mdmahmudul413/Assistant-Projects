@extends('website.master')

@section('title')
    Search Result
@endsection

@section('body')
    <!-- Start of Main -->
    <main class="main">
        <!-- Start of Page Content -->
        <div class="page-content mb-10 mt-2">
            <div class="container">
                <!-- Start of Shop Banner -->
                <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                     style="background-image: url({{asset('/')}}website/assets/images/shop/banner1.jpg); background-color: #FFC74E;">
                    <div class="banner-content">
                        @if($products->count() == 0 || $products->count() == 1)
                            <h3 class="banner-title text-white font-weight-bolder ls-normal">
                                Total {{$products->count()}} Result For '{{$search}}'
                            </h3>
                        @else
                            <h3 class="banner-title text-white font-weight-bolder ls-normal">
                                Total {{$products->count()}} Results For '{{$search}}'
                            </h3>
                        @endif
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
                                        <a href="{{route('detail', $product->id)}}">
                                            <img src="{{asset($product->image)}}" alt="Search Product" width="300" height="338" />
                                        </a>
                                        <form action="{{route('cart', ['id' => $product->id])}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="quantity" value="1"/>
                                            <div class="product-action-horizontal" style="width: 100px;">
                                                <button type="submit" class="btn-product-icon w-icon-cart"
                                                        title="Add to cart"></button>
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
                                                @if($product->selling_price > 0 && $sale_products->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                    <ins class="new-price">Tk {{$product->selling_price}}</ins>
                                                    <del class="old-price">Tk {{$product->regular_price}}</del>
                                                @else
                                                    <ins class="new-price">Tk {{$product->regular_price}}</ins>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    <!-- End of Shop Main Content -->
                </div>
                <!-- End of Shop Content -->
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->
@endsection
