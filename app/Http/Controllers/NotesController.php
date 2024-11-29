<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    // Mostrar todas las notas
    public function index()
    {
        $notes = Note::all(); // Recuperamos todas las notas
        return view('notes.index', compact('notes'));
    }

    // Mostrar el formulario para crear una nueva nota
    public function create()
    {
        return view('notes.create');
    }

    // Almacenar una nueva nota
    public function store(Request $request)
    {
        // Validar la entrada
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Crear la nota
        Note::create($request->all());

        // Redirigir a la lista de notas con un mensaje de éxito
        return redirect()->route('notes.index')->with('success', 'Nota creada correctamente.');
    }
}

