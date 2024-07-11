@extends('layouts.app')

@section('content')
    <h1>Apuestas de juegos con más de 3 jugadores</h1>
    <ul>
        @foreach ($apuestas as $apuesta)
            <li>{{ $apuesta->id }} - {{ $apuesta->fecha }} - Juego: {{ $apuesta->juego->nombre }} - Monto: {{ $apuesta->monto }}</li>
        @endforeach
    </ul>
@endsection
