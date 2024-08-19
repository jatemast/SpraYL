<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;

class CarSelectionController extends Controller
{
     /**
     * Obtener todas las marcas.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMarcas()
    {
        $marcas = Marca::all();
        return response()->json($marcas);
    }

    /**
     * Obtener modelos de una marca específica.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getModelos(Request $request)
    {
        $request->validate([
            'marca_id' => 'required|exists:marcas,id',
        ]);

        $marcaId = $request->input('marca_id');
        $modelos = Modelo::where('marca_id', $marcaId)->get();

        return response()->json($modelos);
    }
   
}
