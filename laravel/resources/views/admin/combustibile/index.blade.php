@extends('layouts.mainLayout')

@section('css')

@endsection

@section('header_js')

@endsection

@section('content')
<div class="table-section">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="white-space: nowrap;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Tecnologia</th>
                        <th scope="col">Potere Calorifero</th>
                        <th scope="col">Costo Unitario</th>
                        <th scope="col">Costo 1kwh Lordo</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($combustibili as $combustibile)
                    <tr>
                        <th scope="row">{{$combustibile->id}}</th>
                        <td>{{$combustibile->tipo}}</td>
                        <td>{{$combustibile->tecnologia}}</td>
                        <td>{{$combustibile->poterecalorifero}}</td>
                        <td>{{$combustibile->costounitario}}</td>
                        <td>{{$combustibile->costo1kwhlordo}}</td>
                        <td><a href="{{route('admin.combustibile.edit', $combustibile)}}">Modifica</a> | <a href="{{route('admin.combustibile.destroy', $combustibile)}}">Elimina</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a href="{{route('admin.combustibile.create')}}">Aggiungi Combustibile</a>
        </div>
    </div>
</div>
@endsection

@section('footer_js')

@endsection