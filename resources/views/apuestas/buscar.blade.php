@extends('layouts.app')

@section('content')
    <h1>Buscar Apuestas por Juego</h1>

    <form action="{{ route('apuestas.buscar') }}" method="GET">
        @csrf
        <div>
            <label for="nombre_juego">Nombre del Juego:</label>
            <input type="text" id="nombre_juego" name="nombre_juego" required>
        </div>
        <button type="submit">Buscar</button>
    </form>

    @if (isset($apuestas))
        <h2>Resultados de la búsqueda:</h2>
        <ul>
            @foreach ($apuestas as $apuesta)
                <li>{{ $apuesta->id }} - {{ $apuesta->fecha }} - Juego: {{ $apuesta->juego->nombre }} - Monto: {{ $apuesta->monto }}</li>
            @endforeach
        @endif
        </ul>
@endsection
