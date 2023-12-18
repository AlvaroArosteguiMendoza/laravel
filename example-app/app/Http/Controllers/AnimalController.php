<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function mostrarAnimales(Request $request)
    {
        $numeros = [
            "Somebody", "once", "told", "me",
            "The", "world", "is"
        ];

        return response()->json(['mensaje' => 'Animales', 'datos' => $numeros]);
    }
}
