<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesPlatformController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all(); 
        return view('recipes.index', compact('recipes'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
        ]);

        Recipe::create($request->all());
        return redirect()->route('recipes.index')->with('success', 'Receta creada correctamente.');
    }
}
