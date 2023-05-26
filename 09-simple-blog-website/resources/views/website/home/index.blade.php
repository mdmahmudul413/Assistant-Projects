@extends('website.master')

@section('body')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Blog Grid Sidebar</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="index.html">Blog</a></li>
                    <li>Blog Grid Sidebar</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="section blog-section blog-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-4">

                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{ route('detail', ['id' => $blog->id]) }}">
                                    <img src="{{ asset($blog->image) }}" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">eCommerce</a>
                                <h4>
                                    <a href="blog-single-sidebar.html">{{ $blog->title }}</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="button">
                                    <a href="{{route('detail', ['id' => $blog->id])}}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    
                </div>

                <div class="pagination left blog-grid-page">
                    <ul class="pagination-list">
                        <li><a href="javascript:void(0)">Prev</a></li>
                        <li class="active"><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection