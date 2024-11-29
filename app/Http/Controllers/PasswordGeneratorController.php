<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordGeneratorController extends Controller
{
    public function index()
    {
        return view('password-generator.index');
    }

    public function generate(Request $request)
    {
        // Validamos el largo de la contraseña
        $request->validate([
            'length' => 'required|integer|min:6|max:20', // Contraseña entre 6 y 20 caracteres
        ]);

        $length = $request->input('length');
        $password = $this->generatePassword($length);

        return view('password-generator.result', compact('password'));
    }

    // Función para generar la contraseña
    private function generatePassword($length)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+';
        $password = '';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, $charactersLength - 1)];
        }
        return $password;
    }
}

