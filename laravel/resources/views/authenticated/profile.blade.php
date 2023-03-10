@extends('layouts.mainLayout')

@section('css')
<link rel="stylesheet" href="{{asset('css/profilo.css')}}">
@endsection

@section('header_js')

@endsection

@section('content')
<main>
    <!--=================================
intro-title -->
    <section class="intro-title black-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-left">
                    <div class="intro-content">
                        <div class="intro-name">
                            <h3 class="text-white">Profilo</h3>
                        </div>
                        <div class="intro-img">
                            <img class="img-fluid" src="images/breadcrumb/02.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
intro-title -->

    <!--=================================
page-section -->

    <section class="page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-4 profile-img-container">
                    <div id="profile_img"></div>
                </div>
                <div class="col-md-8">
                    <div class="custom-content">
                        <div class="clearfix">
                            <div class="title pull-left mb-2">
                                <h4 class="text-text">{{Auth::user()->name}}</h4>
                                <span class="text-blue">Utente</span>
                            </div>
                        </div>
                        <div class="accordion mb-3">
                            <div class="acd-group acd-active text-black">
                                <a href="#" class="acd-heading"><span class="ti-bar-chart-alt"></span>Sessioni</a>
                                <div class="acd-des">
                                    <a href="{{route('sessioni.index')}}"><strong>Le mie Sessioni</strong></a>
                                </div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black"><span class="ti-pulse"></span>Confronti</a>
                                <div class="acd-des">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                        </div>
                        <div class="clearfix mb-2">
                            <a class="text-blue" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <strong>Disconnetti</strong>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
page-section -->
</main>
@endsection

@section('footer_js')
<script>
    createImageFromName();

    function createImageFromName() {
        let imageContainer = document.getElementById('profile_img');
        let username = '{{Auth::user()->name}}';
        let splitted = username.split(' ');
        /* console.log(splitted); */
        if (splitted.length >= 2) {
            let firstLetter = splitted[0].slice(0, 1);
            let secondLetter = splitted[1].slice(0, 1);
            var nameString = firstLetter + secondLetter;
            /* console.log(firstletter, secondLetter); */
        } else {
            let firstLetter = splitted[0].slice(0, 1);
            var nameString = firstLetter;
        }
        imageContainer.innerHTML = nameString;
        createCircleFromUserImg();
    }

    function createCircleFromUserImg() {
        let imageContainer = document.getElementById('profile_img');
        let imageWidth = imageContainer.offsetWidth;
        console.log(imageWidth);
        imageContainer.style.height = imageWidth + 'px';
    }
</script>
@endsection