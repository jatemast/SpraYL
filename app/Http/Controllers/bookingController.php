<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seleccioncarro;
use Illuminate\Support\Facades\Validator;

class bookingController extends Controller
{
    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|string|max:255',
            'color' => 'required|string|max:255',

        ]);


        if($validation->fails()){
            return response()->json($validation->errors(), 400);
        }

        // Crear un nuevo registro en la base de datos usando el modelo
        $carro = seleccioncarro::create($request->all());

        // Responder con éxito
        return response()->json(['message' => 'Carro almacenado exitosamente', 'data' => $carro], 201);
    }
    }
