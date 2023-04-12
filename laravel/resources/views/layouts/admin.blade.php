@extends('layouts.mainlayout')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('header_js')

@endsection

@section('content')
<div class="admin-container">
    <div class="left">

    </div>
    <div class="right">
        @yield('content')
    </div>
</div>
@endsection

@section('footer_js')

@endsection