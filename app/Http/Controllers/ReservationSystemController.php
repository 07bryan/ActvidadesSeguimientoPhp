<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationSystemController extends Controller
{
    // Mostrar la vista con todas las reservas
    public function index()
    {
        // Obtener todas las reservas (puedes añadir más lógica si es necesario)
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    // Mostrar formulario para crear una nueva reserva
    public function create()
    {
        return view('reservations.create');
    }

    // Guardar una nueva reserva
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'guests' => 'required|integer|min:1',
        ]);

        // Crear la reserva
        Reservation::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'guests' => $request->input('guests'),
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reserva realizada con éxito');
    }
}
