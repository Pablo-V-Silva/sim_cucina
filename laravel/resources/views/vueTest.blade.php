@extends('layouts.mainLayout')

@section('css')

@endsection

@section('header_js')

@endsection

@section('content')
<div id="app">
    <router-view></router-view>
</div>

<script src="{{asset('js/app.js')}}"></script>
@endsection

@section('footer_js')

@endsection