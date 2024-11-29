<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;  // Asegúrate de tener el modelo Expense

class ExpenseManagerController extends Controller
{
    // Mostrar la lista de gastos
    public function index()
    {
        $expenses = Expense::all();  // Obtener todos los gastos
        return view('expense-manager.index', compact('expenses'));
    }

    // Agregar un nuevo gasto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'category' => 'required|string|max:255',
        ]);

        Expense::create([
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
            'category' => $request->input('category'),
        ]);

        return redirect()->route('expense-manager.index');
    }

    // Eliminar un gasto
    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();

        return redirect()->route('expense-manager.index');
    }
}
