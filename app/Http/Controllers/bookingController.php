<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seleccioncarro;

class bookingController extends Controller
{
    public function store(Request $request)
    {
           // Validar los datos de la solicitud
           $validatedData = $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|string|max:4',
            'color' => 'required|string|max:255',
        ]);

        // Crear un nuevo registro en la base de datos usando el modelo
        $carro = seleccioncarro::create($validatedData);

        // Responder con éxito
        return response()->json(['message' => 'Carro almacenado exitosamente', 'data' => $carro], 201);
    }
    }
