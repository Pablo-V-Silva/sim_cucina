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
                            <h3 class="text-white">Register</h3>
                            <ul class="breadcrumb mt-1">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item text-white">Pages</li>
                                <li class="breadcrumb-item active">Register</li>
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
                <div class="col-md-12">
                    <h4 class="mb-3">Registrati</h4>
                    <form class="gray-form" method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="First Name">Nome*</label>
                                <input id="name" type0="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Last Name">Email*</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password* </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group col-md-6">
                            <label for="Password">Conferma Password*</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="Registrati" class="button mt3">
                            <p class="link pull-right mt-4">Hai già un account? <a href="{{route('login')}}"> Accedi </a></p>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
register-form  -->
@endsection

