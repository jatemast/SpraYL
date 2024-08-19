<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Categoria;
use App\Models\Color;

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
    public function Car_models()
    {
        try {
            // Obtén todos los modelos de autos desde la base de datos
            $carModels = Modelo::all();

            // Verifica si se encontraron modelos
            if ($carModels->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No se encontraron modelos de autos.',
                ], 404);
            }

            // Devuelve los modelos de autos en formato JSON
            return response()->json([
                'success' => true,
                'data' => $carModels
            ], 200);

        } catch (\Exception $e) {
            // Maneja cualquier excepción que pueda ocurrir
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al obtener los modelos de autos.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Obtener todas las categorías.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategorias()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    /**
     * Obtener modelos de una categoría específica.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getModelosPorCategoria(Request $request)
    {
        $request->validate([
            'categoria_id' => 'required|exists:categorias,id',
        ]);
    
        $categoriaId = $request->query('categoria_id'); // Usar query() en lugar de input() para GET
    
        $modelos = Modelo::where('categoria_id', $categoriaId)->get();
    
        return response()->json([
            'status' => 'success',
            'data' => $modelos
        ]);
    }


    /**
     * Obtener todos los colores.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getColores()
    {
        $colores = Color::all();
        return response()->json($colores);
    }
    
}
