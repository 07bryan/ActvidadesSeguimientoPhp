<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipCalculatorController extends Controller
{
    public function index()
    {
        return view('tip-calculator.index');
    }

    public function calculate(Request $request)
    {
        $total = $request->input('total');
        $percentage = $request->input('percentage');
        $tip = $total * ($percentage / 100);

        return view('tip-calculator.result', compact('total', 'percentage', 'tip'));
    }
}

