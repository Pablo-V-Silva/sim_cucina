@extends('layouts.mainLayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('header_js')
@endsection

@section('content')
    @if ($confrontando)
        <div class="card-container">
            <div class="card text-center py-3">
                <h2 class="py-2">Vecchio Consumo</h2>
                <h4>{{ $vecchioCon->combustibile->tipo }}
                    {{ $vecchioCon->combustibile->tecnologia == null ? '' : '(' . $vecchioCon->combustibile->tecnologia . ')' }}
                </h4>
                <h5 class="py-2">Persone in casa</h5>
                <p><strong>{{ $persone }}</strong></p>
                <h5 class="py-2">Modalità di consumo</h5>
                <p><strong>{{ $vecchioCon->tipoconsumo }}</strong></p>
                <h5 class="py-2">Consumo Medio Giornaliero</h5>
                <p><strong>€ {{ number_format($vecchioCon->unitaconsumate / 7, 2, '.', '') }}</strong></p>
            </div>
            <div class="card text-center">
                <h2 class="py-2">Nuovo Consumo</h2>
                <h4>{{ $confrontato->combustibile->tipo }}
                    {{ $confrontato->combustibile->tecnologia == null ? '' : '(' . $confrontato->combustibile->tecnologia . ')' }}
                </h4>
                <h5 class="py-2">Persone in casa</h5>
                <p><strong>{{ $persone }}</strong></p>
                <h5 class="py-2">Modalità di consumo</h5>
                <p><strong>{{ $confrontato->tipoconsumo }}</strong></p>
                <h5 class="py-2">Consumo Medio Giornaliero</h5>
                <p><strong>€ {{ number_format($confrontato->unitaconsumate / 7, 2, '.', '') }}</strong></p>
            </div>
        </div>
    @else
        <div class="confrontoContainer text-center py-5">
            <h2 class="pt-4 pb-3">Seleziona con cosa vuoi confrontare</h2>
            <form action="{{ route('calcola_confronto') }}" method="get">
                <select name="confronto" class="w-75 border-radius-2 py-2 my-1">
                    <option value="0" disabled selected>Seleziona...</option>
                    @foreach ($combustibili as $comb)
                        <option value="{{ $comb->id }}">{{ $comb->tipo }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="persone" value="{{ $validate['persone'] }}">
                <input type="hidden" name="oldConsumo" value="{{ $validate['object'] }}">
                <!-- <input type="hidden" name=""> -->
                <div class="my-3"><input type="submit" value="Confronta" class="confrontaBtn grow"></div>
            </form>
        </div>
    @endif
@endsection

@section('footer_js')
@endsection
