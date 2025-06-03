<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function index()
    {
        return view('suma', ['res' => null]);
    }

    public function Suma(Request $request)
    {
        $numero1 = $request->input('num1');
        $numero2 = $request->input('num2');
        $resultado = $numero1 + $numero2;

        return view('suma', ['res' => $resultado]);
    }
}
