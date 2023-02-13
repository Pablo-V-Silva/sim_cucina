@extends('layouts.mainLayout')

@section('css')

@endsection

@section('header_js')

@endsection

@section('content')
    <h2>Seleziona con cosa vuoi confrontare</h2>
    <form action="{{route('calcola_confronto')}}" method="get">
        <select name="confronto">
            <option value="0" disabled selected>Seleziona...</option>
            @foreach($combustibili as $comb)
                <option value="{{$comb->id}}">{{$comb->tipo}}</option>
            @endforeach
        </select>
        <input type="hidden" name="persone" value="{{$validate['persone']}}">
        <input type="hidden" name="oldConsumo" value="{{$validate['object']}}">
        <!-- <input type="hidden" name=""> -->
        <input type="submit" value="Confronta">
    </form>
@endsection

@section('footer_js')

@endsection