@extends('layouts.mainLayout')

@section('css')

@endsection

@section('header_js')

@endsection

@section('content')
    <div class="edit-section">
        <div class="container">
            <div class="title">
                <h1>Modifica il Combustibile : {{$combustibile->tipo}} {{$combustibile->tecnologia}}</h1>
                <form action="{{route('admin.combustibile.update')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <h4>Tipo</h4>
                        <input type="text" name="tipo" id="tipo" value="{{$combustibile->tipo}}">
                    </div>
                    <div class="row">
                        <h4>Tecnologia</h4>
                        <input type="text" name="tecnologia" value="{{$combustibile->tecnologia}}">
                    </div>
                    <div class="row">
                        <h4>Potere Calorifero</h4>
                        <input type="text" name="poterecalorifero" value="{{$combustibile->poterecalorifero}}">
                    </div>
                    <div class="row">
                        <h4>Costo Unitario</h4>
                        <input type="number" name="costounitario" value="{{$combustibile->costounitario}}">
                    </div>
                    <div class="row">
                        <h4>Unità di Misura</h4>
                        <input type="text" name="unitadimisura" value="{{$combustibile->unitadimisura}}">
                    </div>
                    <div class="row">
                        <h4>Costo 1KWH Lordo</h4>
                        <input type="number" name="costo1kwhlordo" value="{{$combustibile->costo1kwhlordo}}">
                    </div>
                    <div class="row">
                        <h4>Costo 1KWH Netto</h4>
                        <input type="number" name="costo1kwhnetto" value="{{$combustibile->costo1kwhnetto}}">
                    </div>
                    <div class="row">
                        <h4>Resa / Conversione</h4>
                        <input type="number" name="resaconversione" value="{{$combustibile->resaconversione}}">
                    </div>
                    <div class="row">
                        <h4>URL Immagine</h4>
                        <input type="text" name="immagine" value="{{$combustibile->immagine}}">
                    </div>
                    <div class="row">
                        <input type="submit" value="Modifica">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer_js')

@endsection