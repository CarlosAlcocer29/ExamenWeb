@extends('layouts.app')

@section('content')
    <h1>Comparar Apuestas</h1>
    <p>
        @if ($totalCartas > $totalNoCartas)
            El dinero total de las apuestas en juegos de cartas es mayor.
        @else
            El dinero total de las apuestas en juegos que no son de cartas es mayor.
        @endif
    </p>
@endsection
