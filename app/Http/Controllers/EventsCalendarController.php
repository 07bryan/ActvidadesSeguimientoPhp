<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsCalendarController extends Controller
{
    public function index()
    {
        $events = Event::all(); 
        return view('events-calendar.index', compact('events'));
    }
    public function create()
    {
        return view('events-calendar.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Event::create($request->all());

        return redirect()->route('events-calendar.index')->with('success', 'Evento creado correctamente.');
    }
}
