@extends('layouts.mainLayout')

@section('css')
<link rel="stylesheet" href="{{asset('css/confronta.css')}}">

@endsection

@section('header_js')

@endsection

@section('content')
    @if($confrontando)
        <div class="card-container">
            <div class="card">
                <h2>Vecchio Consumo</h2>
                <h4>{{$vecchioCon->combustibile->tipo}} {{$vecchioCon->combustibile->tecnologia == NULL ? '' : '(' . $vecchioCon->combustibile->tecnologia . ')'}}</h4>
                <h5>Persone in casa</h5>
                <p><strong>{{$persone}}</strong></p>
                <h5>Modalità di consumo</h5>
                <p><strong>{{$vecchioCon->tipoconsumo}}</strong></p>
                <h5>Consumo Medio Giornaliero</h5>
                <p><strong>€ {{number_format($vecchioCon->unitaconsumate / 7, 2,'.','');}}</strong></p>
            </div>
            <div class="card">
                <h2>Nuovo Consumo</h2>
                <h4>{{$confrontato->combustibile->tipo}} {{$confrontato->combustibile->tecnologia == NULL ? '' : '(' . $confrontato->combustibile->tecnologia . ')'}}</h4>
                <h5>Persone in casa</h5>
                <p><strong>{{$persone}}</strong></p>
                <h5>Modalità di consumo</h5>
                <p><strong>{{$confrontato->tipoconsumo}}</strong></p>
                <h5>Consumo Medio Giornaliero</h5>
                <p><strong>€ {{number_format($confrontato->unitaconsumate / 7, 2,'.','');}}</strong></p>
            </div>
        </div>
    @else
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
    @endif
@endsection

@section('footer_js')

@endsection