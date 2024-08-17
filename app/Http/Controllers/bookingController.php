<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Asegúrate de usar el nombre correcto del modelo

use Illuminate\Support\Facades\Validator;

class bookingController extends Controller
{
    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'marca' => 'string|max:255',
            'modelo' => 'string|max:255',
            'anio' => 'integer|digits:4', // Asumiendo que el año es un número entero de 4 dígitos
            'color' => 'string|max:255',
            'servicio_extra' => 'string|max:255',
            'nombre' => 'string|max:255',
            'fecha' => 'date',
            'nombre_cliente' => 'string|max:255',
            'apellido_cliente' => 'string|max:255',
            'email_cliente' => 'email|max:255',
            'telefono_cliente' => 'string|max:20',
            'direccion_cliente' => 'string|max:255',
            'ciudad_cliente' => 'string|max:255',
            'estado_servico' => 'string|max:255',
            'codigo_postal_cliente' => 'string|max:10',
            'peticion_cliente' => 'string|max:500',
            'descripcion_servicio' => 'string|max:500',
            'dirt_charges' => 'nullable|boolean', // Campo booleano, no requerido
            'acepto_veicle' => 'nullable|boolean', // Campo booleano, no requerido
            'la_tos' => 'nullable|boolean', // Campo booleano, no requerido
            'fecha_servicio' => 'date',

        ]);


        if($validation->fails()){
            return response()->json($validation->errors(), 400);
        }

        // Crear un nuevo registro en la base de datos usando el modelo
        $carro = Booking::create($request->all());

        // Responder con éxito
        return response()->json(['message' => 'Carro almacenado exitosamente', 'data' => $carro], 201);
    }
    }
