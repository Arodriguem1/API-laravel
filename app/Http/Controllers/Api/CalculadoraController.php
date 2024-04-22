<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
     /**
     * Suma dos números.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sumar(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        
        $resultado = $a + $b;

        return response()->json(['resultado' => $resultado]);
    }

    /**
     * Resta dos números.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function restar(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        error_log('a');
        error_log($a);
        $resultado = $a - $b;

        return response()->json(['resultado' => $resultado]);
    }
}