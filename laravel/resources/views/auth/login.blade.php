@extends('layouts.mainLayout')

@section('css')
<link rel="stylesheet" href="{{asset('css/auth.css')}}">
@endsection

@section('content')
<!--=================================
intro-title -->
<section class="intro-title black-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Login</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white">Pages</li>
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                    </div>
                    <div class="intro-img">
                        <img class="img-fluid" src="images/breadcrumb/02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
intro-title -->
<!--=================================
register-form  -->
<section class="login-form page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h4>Login To Your Account</h4>
                <form class="gray-form mt-2 clearfix" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email* </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Password">Password* </label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="remember-checkbox mb-3">
                            <input class="d-none" type="checkbox" name="remember" id="remember" checked>
                            @if (Route::has('password.request'))
                            <a class="pulFl-right" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="button">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
            <div class="col-lg-3">
                <div class="login-social">
                    <h4>Social media</h4>
                    <ul>
                        <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Log in with Facebook</a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Log in with Twitter</a></li>
                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i> Log in with google+</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
    register-form  -->
@endsection