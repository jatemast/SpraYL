<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking; // Importa el modelo booking
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
    'nombre' => 'required|string|max:255',
    'fecha' => 'required|date',
    'nombre_cliente' => 'required|string|max:255',
    'apellido_cliente' => 'required|string|max:255',
    'email_cliente' => 'required|string|email|max:255',
    'telefono_cliente' => 'required|string|max:20',
    'direccion_cliente' => 'required|string|max:255',
    'ciudad_cliente' => 'required|string|max:255',
    'estado_servico' => 'required|string|max:255',
    'codigo_postal_cliente' => 'required|string|max:10',
    'peticion_cliente' => 'required|string|max:500',
    'descripcion_servicio' => 'required|string|max:500',
    'dirt_charges' => 'required|boolean',
    'acepto_veicle' => 'required|boolean',
    'la_tos' => 'required|boolean',
    'fecha_servicio' => 'required|date',

        ]);


        if($validation->fails()){
            return response()->json($validation->errors(), 400);
        }

        // Crear un nuevo registro en la base de datos usando el modelo
        $carro = booking::create($request->all());

        // Responder con éxito
        return response()->json(['message' => 'Carro almacenado exitosamente', 'data' => $carro], 201);
    }
    }
