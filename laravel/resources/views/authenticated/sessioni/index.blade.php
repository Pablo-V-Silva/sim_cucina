@extends('layouts.mainLayout')

@section('css')
<link rel="stylesheet" href="{{asset('css/sessioni.css')}}">
@endsection

@section('header_js')

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
                        <h3 class="text-white">Le mie Sessioni</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white">Pages</li>
                            <li class="breadcrumb-item active">Accordion</li>
                        </ul>
                    </div>
                    <div class="intro-img">
                        <img class="img-fluid" src="images/breadcrumb/02.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== intro-title ==============-->

<!--=================================
accordion  -->
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3">Gestisci le tue sessioni</h2>
                <div class="accordion mb-3">
                    <div class="acd-group text-black acd-active d-none">
                        <a href="#" class="acd-heading"></a>
                        <div class="acd-des"></div>
                    </div>
                    @foreach($sessioni as $sessione)
                    <div class="acd-group">
                        <a href="#" class="acd-heading text-black"> Sessione id: {{$sessione->id}} ({{$sessione->created_at}})</a>
                        <div class="acd-des">
                            <ul>
                                <li>
                                    Data: {{$sessione->created_at}}
                                </li>
                                <li>
                                    Combustibile: {{$sessione->combustibile->tipo}} {{$sessione->combustibile->tecnologia != '' ? '(' + $sessione->combustibile->tecnologia + ')' : ''}} 
                                </li>
                                <li>
                                    Persone: {{$sessione->persone}}
                                </li>
                                <li>
                                    Tipo di Consumo: {{$sessione->tipoconsumo}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    <!--=================================
accordion  -->
@endsection

@section('footer_js')

@endsection