@extends('layouts.app')

@section('content')
    <h1>Listado de Apuestas</h1>
    <ul>
    @foreach ($apuestas as $apuesta)
        <li>{{ $apuesta->id }} - {{ $apuesta->fecha }} - Juego:
            @if ($apuesta->juego)
                {{ $apuesta->juego->nombre }}
            @else
                (Sin juego asociado)
            @endif
        </li>
    @endforeach
</ul>

@endsection
