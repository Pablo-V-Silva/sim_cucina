@extends('layouts.mainLayout')

@section('css')

@endsection

@section('header_js')

@endsection

@section('content')
    <div class="edit-section">
        <div class="container">
            <div class="title">
                <h1>Crea il combustibile</h1>
                <form action="{{route('admin.combustibile.store')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="row">
                        <h4>Tipo</h4>
                        <input type="text" name="tipo" id="tipo">
                    </div>
                    <div class="row">
                        <h4>Tecnologia</h4>
                        <input type="text" name="tecnologia">
                    </div>
                    <div class="row">
                        <h4>Potere Calorifero</h4>
                        <input type="text" name="poterecalorifero">
                    </div>
                    <div class="row">
                        <h4>Costo Unitario</h4>
                        <input type="number" name="costounitario">
                    </div>
                    <div class="row">
                        <h4>Unità di Misura</h4>
                        <input type="text" name="unitadimisura">
                    </div>
                    <div class="row">
                        <h4>Costo 1KWH Lordo</h4>
                        <input type="number" name="costo1kwhlordo">
                    </div>
                    <div class="row">
                        <h4>Costo 1KWH Netto</h4>
                        <input type="number" name="costo1kwhnetto">
                    </div>
                    <div class="row">
                        <h4>Resa / Conversione</h4>
                        <input type="number" name="resaconversione">
                    </div>
                    <div class="row">
                        <h4>URL Immagine</h4>
                        <input type="text" name="immagine">
                    </div>
                    <div class="row">
                        <input type="submit" value="Crea">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer_js')

@endsection