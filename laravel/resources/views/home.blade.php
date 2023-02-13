@extends('layouts.mainLayout')

@section('css')

@endsection

@section('header_js')

@endsection

@section('content')

<main>
    <div class="container">
        <form action="{{route('calcola_cucina', $_REQUEST)}}" method="get">
            
            <div class="row">
                <h2>Scegli il tipo di combustibile</h2>
                <select name="tipoCombustibile">
                    <option value="0" disabled selected>Seleziona</option>
                    @foreach($combustibili as $combustibile)
                        <option value="{{$combustibile->id}}">{{$combustibile->tipo}} {{$combustibile->tecnologia == NULL ? '' : '(' . $combustibile->tecnologia . ')'}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <h2>Inserisci il numero di persone in casa</h2>
                <input type="number" name="numeroPersone" value="{{ old('numeroPersone') }}">
            </div>
            <div class="row">
                <h2>Inserisci la quantità di consumo</h2>
                <select name="quantita">
                    <option value="0" disabled selected>Seleziona</option>
                    <option value="basso">Bassa</option>
                    <option value="medio">Media</option>
                    <option value="alto">Alta</option>
                </select>
            </div>
            <input type="submit" value="CALCOLA">
        </form>
        @if($is_calc == true)
            <h2>In totale {{$persone > 1 ? 'consumate' : 'consumi'}}:</h2>
            <h3>{{$cons_tot_giornaliero}} kw al giorno (€ {{$spesa_tot_giornaliera}})</h3>
            <h3>{{$cons_tot_giornaliero * 7}} kw a settimana (€ {{$spesa_tot_giornaliera * 7}})</h3>
            <h3>{{$cons_tot_giornaliero * 30}} kw al mese* (€ {{$spesa_tot_giornaliera * 30}})</h3>
            <h3>{{$cons_tot_giornaliero * 365}} kw all'anno (€ {{$spesa_tot_giornaliera * 365}})</h3>
            <a href="{{route('confronta_cucina', ['spesa' => $spesa_tot_giornaliera, 'persone' => $persone, 'consumo' => $cons_tot_giornaliero, 'object' => $consumo] )}}">CONFRONTA</a>
        @endif
    </div>
</main>

@endsection

@section('footer_js')

@endsection