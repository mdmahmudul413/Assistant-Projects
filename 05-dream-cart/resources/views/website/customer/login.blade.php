@extends('website.master')

@section('title')
    Login / Register
@endsection

@section('body')
    <!-- Start of Main -->
    <main class="main login-page">
        <div class="page-content">
            <div class="container">
                <h3 class="text-center mt-10" style="color: red;">{{session('message')}}</h3>
                <div class="login-popup">
                    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                        <ul class="nav nav-tabs text-uppercase" role="tablist">
                            <li class="nav-item">
                                <a href="#sign-in" class="nav-link active">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sign-up" class="nav-link">Sign Up</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="sign-in">
                                <form action="{{route('customer.login')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email address <span style="color: red;">*</span></label>
                                        <input type="email" class="form-control" name="email" required/>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Password <span style="color: red;">*</span></label>
                                        <input type="password" class="form-control" name="password" required/>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center justify-content-center">
                                        <a href="#">Lost your password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="sign-up">
                                <form action="{{route('customer.register')}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-5">
                                        <label>Full Name <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address <span style="color: red;">*</span></label>
                                        <input type="email" class="form-control" name="email" required/>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Password <span style="color: red;">*</span></label>
                                        <input type="password" class="form-control" name="password" required/>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Phone Number <span style="color: red;">*</span></label>
                                        <input type="number" class="form-control" name="mobile" required/>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                        <label for="remember" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of Main -->
@endsection

