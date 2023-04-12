@extends('layouts.admin')

@section('content')
<style>
    .pricing:hover{
        box-shadow: 2px 3px 9px 1px #000000;
    }
</style>
<div class="admin-section">
    <div class="container">
        <h1>Pagina di Amministrazione Generale</h1>
        <div class="content d-flex my-4">
            <div class="left sidebar">
                @include('partials.sideBar')
            </div>
            <div class="right">
                <div class="row px-4">             
                    <div class="col-md-4 bottom-m3">
                        <div class="pricing active text-center">
                            <div class="pricing-title">
                                <div class="section-title text-center">
                                    <h5 class="text-center">Utenti Registrati</h5>
                                </div>
                                <img class="my-4" src="images/icon/05.png" alt="">
                                <div class="pricing-prize">
                                    <h2 class="text-black">{{$users}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 bottom-m3">
                        <div class="pricing active text-center">
                            <div class="pricing-title">
                                <div class="section-title text-center">
                                    <h5 class="text-center">Confronti Calcolati</h5>
                                </div>
                                <img class="my-4" src="images/icon/05.png" alt="">
                                <div class="pricing-prize">
                                    <h2 class="text-black">{{$sessioni}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 bottom-m3">
                        <div class="pricing active text-center">
                            <div class="pricing-title">
                                <div class="section-title text-center">
                                    <h5 class="text-center">Sezione Libera</h5>
                                </div>
                                <img class="my-4" src="images/icon/05.png" alt="">
                                <div class="pricing-prize">
                                    <h2 class="text-black">Qualcosa</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection