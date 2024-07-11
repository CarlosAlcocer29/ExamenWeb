<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apuesta;
use App\Models\Juego;

class ApuestaController extends Controller
{
    public function index()
    {
        $apuestas = Apuesta::with('juego')->get();
        return view('apuestas.index', compact('apuestas'));
    }

    public function apuestasMasJugadores()
    {
        $apuestas = Apuesta::whereHas('juego', function ($query) {
            $query->where('cantidad_jugadores', '>', 3);
        })->with('juego')->get();
        return view('apuestas.mas_jugadores', compact('apuestas'));
    }

    public function compararApuestas()
    {
        $totalCartas = Apuesta::whereHas('juego', function ($query) {
            $query->where('juego_de_cartas', true);
        })->sum('monto');

        $totalNoCartas = Apuesta::whereHas('juego', function ($query) {
            $query->where('juego_de_cartas', false);
        })->sum('monto');

        return view('apuestas.comparar', compact('totalCartas', 'totalNoCartas'));
    }

    public function buscarPorJuego(Request $request)
    {
        $nombreJuego = $request->input('nombre_juego');
        $apuestas = Apuesta::whereHas('juego', function ($query) use ($nombreJuego) {
            $query->where('nombre', $nombreJuego);
        })->with('juego')->get();
        return view('apuestas.buscar', compact('apuestas'));
    }

    // Nuevo método para mostrar el formulario de creación de apuestas
    public function mostrarFormularioCrear()
    {
        return view('apuestas.crear');
    }

    public function crearApuesta(Request $request)
    {
        $datosApuesta = $request->only(['id_juego', 'fecha', 'monto']);
        Apuesta::create($datosApuesta);
        return redirect()->route('apuestas.index');
    }
}
