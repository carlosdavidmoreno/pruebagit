<?php

namespace App\Http\Controllers;

use App\Models\Inverted;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class InvertedController extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }

    public function invertir(Request $request)
    {
        $fraseOriginal = $request->input('frase');
        $fraseInvertida = strrev($fraseOriginal); // Invierte la frase

        // Guarda la frase original y la invertida en la base de datos
        Inverted::create([
            'frase_original' => $fraseOriginal,
            'frase_invertida' => $fraseInvertida,
        ]);

        return view('resultado', ['fraseInvertida' => $fraseInvertida]);
    }
}
