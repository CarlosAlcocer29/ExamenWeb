@extends('layouts.app')

@section('content')
    <h1>Crear Apuesta</h1>

    <form action="{{ route('apuestas.crear') }}" method="POST">
        @csrf
        <div>
            <label for="id_juego">ID del Juego:</label>
            <input type="number" id="id_juego" name="id_juego" required>
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" id="fecha" name="fecha" required>
        </div>
        <div>
            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto" required>
        </div>
        <button type="submit">Crear Apuesta</button>
    </form>
@endsection
