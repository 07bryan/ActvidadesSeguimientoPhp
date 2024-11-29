<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineStopwatchController extends Controller
{
    public function index()
    {
        return view('stopwatch.index');
    }

    public function start(Request $request)
    {
        // Iniciar el cronómetro (puedes guardarlo en sesión si lo necesitas)
        session(['start_time' => now()]);
        return redirect()->route('stopwatch.index');
    }

    public function stop()
    {
        // Detener el cronómetro y calcular el tiempo transcurrido
        $start_time = session('start_time');
        if ($start_time) {
            $elapsed_time = now()->diffInSeconds($start_time);
            session(['elapsed_time' => $elapsed_time]);
        }
        return redirect()->route('stopwatch.index');
    }

    public function reset()
    {
        // Resetear el cronómetro
        session()->forget(['start_time', 'elapsed_time']);
        return redirect()->route('stopwatch.index');
    }
}

