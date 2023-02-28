@extends('layouts.mainLayout')

@section('css')

@endsection

@section('content')
    <div id="app">
        <router-view></router-view>
    </div>
@endsection

@section('header_js')

<script src="{{asset('js/vue.js')}}" defer></script>
@endsection

@section('footer_js')

@endsection