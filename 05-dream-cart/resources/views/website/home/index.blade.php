@extends('website.master')

@section('title')
    Popular Eccomerce Website in Bangladesh
@endsection

@section('body')
    <style>
        .flip-clock-container
        {
            --flip-bg-color: #b51a1a;
            --flip-dots-color: #b51a1a;
        }
        .flip-clock-container [class|="flip-item"] .flip-digit > span::after, .flip-clock-container [class|="flip-item"] .flip-digit > span::before
        {
            font-size: 75px;
        }
        .flip-clock-container [class|="flip-item"] .flip-digit > span
        {
            width: 78%;
            height: 75%;
        }
        .flip-clock-container [class|="flip-item"] .flip-digit > span::before
        {
            top: 0;
            line-height: 122px;
        }
        .flip-clock-container [class|="flip-item"] .flip-digit
        {
             margin: 0;
        }
        .flip-clock-container [class|="flip-item"]::before
        {
            content: ":";
            font-family: Consolas;
            font-size: 105px;
            color: var(--flip-dots-color);
            line-height: 90px;
            margin: 0px -10px 0px -32px;
        }
    </style>
    <!-- start of .main -->
    <main class="main">
        <div class="page-content">
            <section class="intro-section">
                <div class="intro-slider swiper-container swiper-theme animation-slider" data-swiper-options = "{
                        'slidesPerView': 1,
                        'autoplay': {
                            'delay': 8000,
                            'disableOnInteraction': false
                        }
                    }">
                    <div class="swiper-wrapper row cols-1 gutter-no">
                        @foreach($sliders as $slider)
                            <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                                 style="background-image: url({{asset($slider->image)}}); background-color: #F3F3F3;">
                                <div class="container">
                                    <div class="banner-content y-50 d-inline-block">
                                        <div class="slide-animate" data-animation-options="{
                                            'name': 'fadeInDownShorter', 'duration': '1s'
                                        }">
                                            <h5 class="banner-subtitle text-uppercase text-primary font-weight-bold mb-1">
                                                From Online Store
                                            </h5>
                                            <h3 class="banner-title text-uppercase ls-25">{{$slider->title}}</h3>
                                            <h4 class="ls-25 mb-0">{{$slider->sub_title}}</h4>
                                            <p class="ls-25"><span class="text-dark" style="font-size: 30px; color: rgb(237, 115, 29)!important;">BDT {{$slider->price}}</span></p>
                                            <a href="{{$slider->link}}"
                                               class="btn btn-dark btn-rounded btn-outline btn-icon-right">
                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="custom-dots swiper-img-dots appear-animate">
                        @foreach($sliders as $slider)
                            <a href="#" class="appear-animate" style="animation-duration: 1.2s;height: 6px;border-radius: 2px;width: 60px; margin-bottom: 20px; background-color: rgb(237, 115, 29);">
                                <span style="background-color: rgb(237, 115, 29); height: 100%; width: 100%;"></span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm bg-white mb-10"
                     data-swiper-options="{
                        'loop': true,
                        'spaceBetween': 30,
                        'slidesPerView': 1,
                        'autoplay': {
                            'delay': 4000,
                            'disableOnInteraction': false
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 2
                            },
                            '992': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }}">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-shipping">
                                    <i class="w-icon-truck"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                                <span class="icon-box-icon icon-payment">
                                    <i class="w-icon-bag"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                                <span class="icon-box-icon icon-money">
                                    <i class="w-icon-money"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                                <span class="icon-box-icon icon-chat">
                                    <i class="w-icon-chat"></i>
                                </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder ls-normal">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="category-banner-3cols swiper-container swiper-theme pt-2 mb-10 appear-animate"
                     data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '992': {
                                'slidesPerView': 3
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                        <div class="swiper-slide banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/1-1.jpg" alt="Category Banner" width="440"
                                     height="210" style="background-color: #E3DFDE;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-capitalize ls-25">Fashion's</h3>
                                <div class="banner-price-info text-uppercase font-weight-bold text-dark mb-4">
                                    Starting At <span class="text-primary">$29</span>
                                </div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Categpry Banner -->
                        <div class="swiper-slide banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/1-2.jpg" alt="Category Banner" width="440"
                                     height="210" style="background-color: #272729;" />
                            </figure>
                            <div class="banner-content text-center x-50 y-50 w-100">
                                <h5 class="banner-subtitle text-uppercase font-weight-bold text-primary ls-10">GET 40%
                                    OFF YOUR ENTIRE ORDER!</h5>
                                <h3 class="banner-title text-white text-capitalize">Black Friday Sale</h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded btn-sm">Shop Now</a>
                            </div>
                        </div>
                        <!-- End of Category Banner -->
                        <div class="swiper-slide banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/1-3.jpg" alt="Category Banner" width="440"
                                     height="210" style="background-color: #DDD8D5;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-capitalize ls-25">For Men's</h3>
                                <div class="banner-price-info text-uppercase font-weight-bold text-dark mb-4">
                                    Starting At <span class="text-primary">$99</span>
                                </div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Categpry Banner -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Category Banner 3Cols -->

                @if($sale_products->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                    <h2 class="title" style="color: red; font-size: 26px; display: block;">ON SALE TIMER</h2>
                    <div class="">
                        <ul class="flip-clock-container flip-1">
                            <li class="flip-item-seconds">{{$seconds}}</li>
                            <li class="flip-item-minutes">{{$minutes}}</li>
                            <li class="flip-item-hours">{{$hours}}</li>
                            <li class="flip-item-days">{{$days}}</li>
                        </ul>
                    </div>

                <div class="row appear-animate" style="border: 2px solid red;padding: 6px; border-radius: 5px;">
                    <div class="title-link-wrapper title-deals appear-animate" style="margin-bottom: 0;">
                        <a style="margin-bottom: 0; font-size: 16px;" href="{{route('on.sale.products')}}" class="font-weight-bold ls-25">More Sale Products<i
                                class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        @foreach($sale_products as $product)
                            <div class="product product-slideup-content col-md-2 mt-3">
                            <figure class="product-media">
                                <div class="product-label-group">
                                    <label style="background-color: red;" class="product-label label-discount">Sale</label>
                                </div>
                                <a href="{{route('detail', ['id' => $product->id])}}">
                                    <img src="{{asset($product->image)}}" alt="Sale Product"
                                         width="239" height="269">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                       title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="{{route('detail', ['id' => $product->id])}}">{{$product->name}}</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">BDT {{$product->selling_price}}</ins><del class="old-price">BDT {{$product->regular_price}}</del>
                                </div>
                            </div>
                                <form action="{{route('cart', ['id' => $product->id])}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1"/>
                                    <div class="product-hidden-details">
                                        <div class="product-action">
                                            <button type="submit" class="btn btn-primary btn-sm btn-block" title="Add to Cart">
                                                <i class="w-icon-cart"></i><span> Add To Cart</span></button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                <!-- End of Product List -->

                <div class="row cols-xl-4 cols-lg-3 cols-sm-2 cols-1 mb-10 appear-animate">
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-1.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Fashionable Leather Satchel</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$25.68</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-2.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Mini Wireless Earphone</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$29.99 - $49.90</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-3.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Women's Comforter</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$24.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-5.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">T-Shirt</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$20.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-4.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Leather Stripe Watch</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$125.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-6.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Best Pedestrian Bag</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$35.88</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-7.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Fashionable Original Coat</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$89.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                    <div class="product-widget-wrap">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/products/2-8.jpg" alt="Product" width="100"
                                         height="106">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Classic Hat</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$23.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Widget -->
                </div>
                <!-- End of Product Widget -->

                <div class="notification-wrapper bg-dark br-sm mb-10 appear-animate justify-content-center"
                     style="animation-duration: 1.2s;">
                    <i class="w-icon-mobile"></i>
                    <p>Download our new app today! Dont Miss our mobile-only offers and shop with Android Play.</p>
                    <a href="#"
                       class="btn btn-white btn-outline btn-rounded btn-sm btn-icon-right font-weight-normal text-capitalize">
                        Download<i class="w-icon-long-arrow-down"></i></a>
                </div>
                <!-- End of Notificateion Wrapper -->

                <div class="row deals-wrapper appear-animate mb-8" style="animation-duration: 1.2s; border: 2px solid #eae8e8; padding: 10px; border-radius: 5px;">
                    <div class="col-lg-12 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal" style="font-size: 26px;">
                                Top Categories
                            </h4>
                            <div class="swiper">
                                <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        @foreach($cats as $category)
                                        <div class="swiper-slide">
                                            <div class="product product-single row">
                                                <div class="col-md-12">
                                                    <h4 class="title-sm font-weight-bolder ls-normal">
                                                        {{$category->name}}
                                                    </h4>
                                                </div>
                                                @php($sum = 0)
                                                @foreach($category->products as $product)
                                                    <div class="product product-slideup-content col-md-2 mt-3">
                                                        <figure class="product-media">
                                                            <a href="{{route('detail', ['id' => $product->id])}}">
                                                                <img src="{{asset($product->image)}}" alt="Category Product"
                                                                     width="239" height="269">
                                                            </a>
                                                            <div class="product-action-vertical">
                                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                                   title="Quick View"></a>
                                                            </div>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h3 class="product-name">
                                                                <a href="{{route('detail', ['id' => $product->id])}}">{{$product->name}}</a>
                                                            </h3>
                                                            <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 100%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                            </div>
                                                            <div class="product-price">
                                                                @if($product->selling_price > 0 && $sale_products->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                                    <ins class="new-price" style="font-size: 18px;">BDT {{$product->selling_price}}</ins><del class="old-price" style="font-size: 18px;">BDT {{$product->regular_price}}</del>
                                                                @else
                                                                    <ins class="new-price" style="font-size: 18px;">BDT {{$product->regular_price}}
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <form action="{{route('cart', ['id' => $product->id])}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="quantity" value="1"/>
                                                            <div class="product-hidden-details">
                                                                <div class="product-action">
                                                                    <button type="submit" class="btn btn-primary btn-sm btn-block" title="Add to Cart">
                                                                        <i class="w-icon-cart"></i><span> Add To Cart</span></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    @php($sum = $sum + 1)
                                                    <?php if($sum == $qty || $sum == 12){ break;} ?>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Deals Wrapper -->

                <div class="row category-banner-2cols appear-animate">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/2-1.jpg" alt="Catgory Banner"
                                     width="670" height="180" style="background-color: #e6e7eb;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary text-capitalize font-weight-normal">From
                                    Online Store</h5>
                                <h3 class="banner-title text-capitalize ls-25">Ipad Super Computer</h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Banner -->
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo7/category/2-2.jpg" alt="Catgory Banner"
                                     width="670" height="180" style="background-color: #28272f;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary text-capitalize font-weight-normal">Season
                                    Collection</h5>
                                <h3 class="banner-title text-white text-capitalize ls-25">Women's Clothes</h3>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Discover Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Banner -->
                    </div>
                </div>
                <!-- End of Category Banner 2Cosl -->


                <!-- Start of Consumer Electronics -->
                <div class="title-links-wrapper title-underline mb-4 d-flex align-items-center appear-animate">
                    <h2 class="title">Trending Product</h2>
                    <ul
                        class="nav-links list-style-none d-flex align-items-center flex-wrap justify-content-center">
                        <li><a href="shop-banner-sidebar.html">Speaker</a></li>
                        <li><a href="shop-boxed-banner.html">Cameras</a></li>
                        <li><a href="shop-fullwidth-banner.html">Audio</a></li>
                        <li><a href="shop-both-sidebar.html">Smartwatch</a></li>
                        <li><a href="shop-horizontal-filter.html">Computers</a></li>
                        <li><a href="shop-list-sidebar.html">TV &amp; Video</a></li>
                    </ul>
                </div>
                <div class="row banner-product-wrapper appear-animate">
                    <div class="col-xl-3 col-lg-4 col-md-5 mb-4 mb-md-0">
                        <div class="banner banner-fixed br-xs" style="background-image: url({{asset('/')}}website/assets/images/demos/demo1/banners/3.jpg);
                            background-color: #363634;">
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-white text-uppercase ls-25 font-weight-bold">New
                                    Arrivals</h5>
                                <h3 class="banner-title text-white text-capitalize ls-25">Water Proof Camera</h3>
                                <div class="banner-price-info text-white font-weight-bold ls25">From Only <span
                                        class="text-primary text-uppercase">25% Off</span></div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="row">
                                @php($sum = 1)
                                @foreach($products as $product)
                                    <div class="product product-slideup-content col-md-3">
                                        <figure class="product-media">
                                            <a href="{{route('detail', ['id' => $product->id])}}">
                                                <img src="{{asset($product->image)}}" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="{{route('detail', ['id'=> $product->id])}}">{{$product->name}}</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                @if($product->selling_price > 0 && $sale_products->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                                    <ins class="new-price" style="font-size: 18px;">BDT {{$product->selling_price}}</ins><del class="old-price" style="font-size: 18px;">BDT {{$product->regular_price}}</del>
                                                @else
                                                    <ins class="new-price" style="font-size: 18px;">BDT {{$product->regular_price}}
                                                @endif
                                            </div>
                                        </div>
                                            <form action="{{route('cart', ['id' => $product->id])}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="quantity" value="1"/>
                                                <div class="product-hidden-details">
                                                    <div class="product-action">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-block" title="Add to Cart">
                                                            <i class="w-icon-cart"></i><span> Add To Cart</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                @php($sum = $sum + 1)
                                    <!-- End of Product Slideup Content -->
                                @endforeach
                            </div>
                    </div>
                </div>
                <!-- End of Consumer Electronics -->

                <!-- Start of Consumer Electronics -->
                <div class="title-links-wrapper title-underline mb-4 d-flex align-items-center appear-animate">
                    <h2 class="title">Consumer Electronics</h2>
                    <ul
                        class="nav-links list-style-none d-flex align-items-center flex-wrap justify-content-center">
                        <li><a href="shop-banner-sidebar.html">Speaker</a></li>
                        <li><a href="shop-boxed-banner.html">Cameras</a></li>
                        <li><a href="shop-fullwidth-banner.html">Audio</a></li>
                        <li><a href="shop-both-sidebar.html">Smartwatch</a></li>
                        <li><a href="shop-horizontal-filter.html">Computers</a></li>
                        <li><a href="shop-list-sidebar.html">TV &amp; Video</a></li>
                    </ul>
                </div>
                <div class="row banner-product-wrapper appear-animate">
                    <div class="col-xl-3 col-lg-4 col-md-5 mb-4 mb-md-0">
                        <div class="banner banner-fixed br-xs" style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/banner/1.jpg);
                            background-color: #363634;">
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-white text-uppercase ls-25 font-weight-bold">New
                                    Arrivals</h5>
                                <h3 class="banner-title text-white text-capitalize ls-25">Premium True Wireless
                                    Earbuds</h3>
                                <div class="banner-price-info text-white font-weight-bold ls25">Sale up to <span
                                        class="text-primary text-uppercase">20% Off</span></div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="swiper-wrapper row">
                            <div class="product product-slideup-content col-md-3">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-1.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Populated Gaming Mouse</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$70.00</ins><del class="old-price">$85.00</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- End of Product Slideup Content -->
                            <div class="product product-slideup-content col-md-3">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-2.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Mobile Electronic Recorder</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$26.89</ins><del class="old-price">$29.79</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- End of Product Slideup Content -->
                            <div class="product product-slideup-content col-md-3">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-1.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Populated Gaming Mouse</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$70.00</ins><del class="old-price">$85.00</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- End of Product Slideup Content -->
                            <div class="product product-slideup-content col-md-3">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-2.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Mobile Electronic Recorder</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$26.89</ins><del class="old-price">$29.79</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- End of Product Slideup Content -->
                            <div class="product product-slideup-content col-md-3">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-1.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Populated Gaming Mouse</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$70.00</ins><del class="old-price">$85.00</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- End of Product Slideup Content -->
                            <div class="product product-slideup-content col-md-3">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/5-2.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Mobile Electronic Recorder</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$26.89</ins><del class="old-price">$29.79</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                            <!-- End of Product Slideup Content -->
                        </div>
                    </div>
                </div>
                <!-- End of Consumer Electronics -->

                <div class="title-links-wrapper title-underline mb-4 d-flex align-items-center appear-animate">
                    <h2 class="title">Clothing &amp; Apparel</h2>
                    <ul
                        class="nav-links list-style-none d-flex align-items-center flex-wrap justify-content-center">
                        <li><a href="shop-banner-sidebar.html">Women</a></li>
                        <li><a href="shop-boxed-banner.html">Men</a></li>
                        <li><a href="shop-fullwidth-banner.html">Girls</a></li>
                        <li><a href="shop-both-sidebar.html">Boys</a></li>
                        <li><a href="shop-horizontal-filter.html">Baby</a></li>
                        <li><a href="shop-list-sidebar.html">Sales &amp; Deals</a></li>
                    </ul>
                </div>
                <div class="row pb-1 banner-product-wrapper appear-animate">
                    <div class="col-xl-3 col-lg-4 col-md-5 mb-4 mb-md-0">
                        <div class="banner banner-fixed br-xs" style="background-image: url({{asset('/')}}website/assets/images/demos/demo7/banner/2.jpg);
                            background-color: #CCCFD4;">
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-white text-uppercase font-weight-bold ls-25">Weekend
                                    Sale</h5>
                                <h3 class="banner-title text-white text-capitalize ls-25">New Fashion Collection
                                </h3>
                                <div class="banner-price-info text-white font-weight-bold ls25">From only <span
                                        class="text-primary text-uppercase">$185.00</span></div>
                                <a href="shop-banner-sidebar.html"
                                   class="btn btn-white btn-outline btn-rounded">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="swiper-container swiper-theme "
                             data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '768': {
                                        'slidesPerView': 2
                                    },
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-md-2 cols-2">
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-1.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Leather Stripe Watch</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$64.47</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-2.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Dark Blue Sneaker</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$23.58 - $45.62</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-3.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Women's Handbag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$78.23</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-4.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Dark Green Bag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$150.60</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-5.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Multi Function Watch</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$75.00</ins><del class="old-price">$95.68</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-6.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html"> Brown Leather Shoes</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(6 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$220.20</ins><del class="old-price">$232.62</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                                <div class="swiper-slide product-col">
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-7.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Top Men's Hiking Hat</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$32.36</ins><del class="old-price">$37.00</del>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                    <div class="product product-slideup-content">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{asset('/')}}website/assets/images/demos/demo7/products/6-8.jpg" alt="Product"
                                                     width="239" height="269">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                   title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product-default.html">Womne's Handbag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="#" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$25.70</ins>
                                            </div>
                                        </div>
                                        <div class="product-hidden-details">
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to Cart">
                                                    <i class="w-icon-cart"></i><span>Add To Cart</span></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                   title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                   title="Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Slideup Content -->
                                </div>
                                <!-- End of Product Col -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- End of Banner Product Wrapper -->

                <div class="sale-banner banner br-sm mb-10 appear-animate">
                    <div class="banner-content">
                        <h4
                            class="content-left banner-subtitle text-uppercase mb-8 mb-md-0 mr-0 mr-md-4 text-primary ls-25">
                                <span class="text-dark font-weight-bold lh-1 ls-normal mr-1">Up
                                    <br>To</span>70% Sale!</h4>
                        <div class="content-right bg-dark">
                            <h3
                                class="banner-title text-uppercase font-weight-normal mb-4 mb-md-0 ls-25 text-white">
                                    <span>Shop By The
                                        <strong class="mr-10 pr-lg-10">Most Popular Brand Now!</strong>
                                        Shop By The
                                        <strong class="mr-10 pr-lg-10">Most Popular Brand Now!</strong>
                                        Shop By The
                                        <strong class="mr-10 pr-lg-10">Most Popular Brand Now!</strong>
                                    </span>
                            </h3>
                            <a href="shop-banner-sidebar.html" class="btn btn-white btn-rounded">Shop Now
                                <i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of Sale Banner -->

                <div class="row mb-4 appear-animate">
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Best Selling</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-1.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Dark Blue Sneaker</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$23.58 - $45.62</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-2.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Women's Handbag</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$25.70</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-3.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Perfect Classic Hat</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$69.99</ins><del class="old-price">$84.16</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->

                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Sale Products</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-4.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Perfect Classic Hat</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$69.99</ins><del class="old-price">$84.16</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-5.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Portable Charger</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$25.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-6.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Headkerchief</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$73.71</ins><del class="old-price">$78.04</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->

                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Featured Products</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-7.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">T-Shirt</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$20.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-8.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Whiter Training Shoes</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$25.00 - $45.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-9.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Grey Calotte</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$320.00</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->

                    <div class="col-lg-3 col-sm-6 mb-6">
                        <h4 class="title title-underline mb-2 pt-1">Latest Products</h4>
                        <div class="widget widget-products">
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-10.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Women's Training Shoes</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$48.00</ins><del class="old-price">$54.00</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-11.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Multi Function Watch</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$75.00</ins><del class="old-price">$95.68</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                            <div class="product product-widget">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/7-12.jpg" alt="Product"
                                             width="124" height="140">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name">
                                        <a href="product-default.html">Top Men's Hiking Hat</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$32.36</ins><del class="old-price">$37.00</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Product Widget -->
                        </div>
                        <!-- End of Widget Products -->
                    </div>
                    <!-- End of Col -->
                </div>
                <!-- End of Row -->

                <div class="swiper-container swiper-theme brands-wrapper br-sm mb-10 appear-animate" data-swiper-options="{
                        'loop': true,
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'autoplay': {
                            'delay': 4000,
                            'disableOnInteraction': false
                        },
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 6
                            },
                            '1200': {
                                'slidesPerView': 8
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/1.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/2.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/3.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/4.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/5.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/6.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/7.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{asset('/')}}website/assets/images/demos/demo2/brands/8.png" alt="Brand" width="290" height="100" />
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- End of Brands Wrapper -->

                <div class="title-link-wrapper title-post mb-4 appear-animate">
                    <h2 class="title ls-normal mb-0">From Our Blog</h2>
                    <a href="blog-listing.html" class="font-weight-bold font-size-normal mb-2">View All Articles<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="swiper-container swiper-theme post-wrapper mb-8 mb-lg-4 appear-animate"
                     data-swiper-options="{
                        'slidesPerView': 1,
                        'spaceBetween': 20,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '992': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/1.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #b8bfc4;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/2.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #596066;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/3.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #eff3f4;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{asset('/')}}website/assets/images/demos/demo7/blog/4.jpg" alt="Post" width="325" height="214"
                                         style="background-color: #68605e;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Comes a cool blog post with Images</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Blog Post -->

                <div class="title-link-wrapper title-recent mb-4 appear-animate">
                    <h2 class="title ls-normal mb-0">Recently Viewed</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold font-size-normal mb-2">More Products<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="swiper-container swiper-theme shadow-swiper appear-animate pb-2 mb-10 appear-animate"
                     data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 5
                            },
                            '992': {
                                'slidesPerView': 6
                            },
                            '1200': {
                                'slidesPerView': 8
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-1.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Top Men's Hiking Hat</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-2.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Leather Stripe Watch</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-3.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Red Cap Sound Marker</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-4.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Smartphone Electronic Charger</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-5.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Blue Ski Boots</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-6.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Soft Sound Marker</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-7.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Multi Function Watch</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                        <img src="{{asset('/')}}website/assets/images/demos/demo7/products/8-8.jpg" alt="Category image"
                                             width="152" height="171" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Running Machine</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Reviewed Producs -->
            </div>
            <!-- End of Container -->
        </div>
        <!-- End of Page Cotent -->
    </main>
    <!-- end of .main -->
@endsection
