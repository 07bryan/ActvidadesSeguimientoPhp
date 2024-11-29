<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveysPlatformController extends Controller
{
    public function index()
    {
        $surveys = Survey::all();
    
        return view('surveys.index', compact('surveys'));
    }
    
    
    public function submitSurvey(Request $request)
    {
        // Validar las respuestas
        $validated = $request->validate([
            'question1' => 'required|string',
            'question2' => 'required|string',
            'question3' => 'nullable|string',
        ]);

        // Guardar las respuestas en la base de datos
        Survey::create([
            'question1' => $validated['question1'],
            'question2' => $validated['question2'],
            'question3' => $validated['question3'],
        ]);

        return redirect()->route('surveys.index')->with('success', 'Encuesta enviada con éxito!');
    }

}
