<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Booking;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $mappedData = [
            'precio_estimado' => $request->input('precio_servicio', null), // _make (marca)
            'tiempo_estimado' => $request->input('tiempo_servicio', null), // _make (marca)
            'marca_id' => $request->input('_make', null), // _make (marca)
            'modelo_id' => $request->input('modelo', null), // modelo
            'anio' => $request->input('year', null), // year (anio)
            'color' => $request->input('color', null), // color
            'servicio_extra' => $request->input('_extra', null), // _extra (servicio_extra)
            'nombre' => $request->input('name', null), // name (nombre)
            'fecha' => $request->input('fecha', null), // fecha
            'nombre_cliente' => $request->input('name', null), // name (nombre_cliente)
            'apellido_cliente' => $request->input('lastName', null), // lastName (apellido_cliente)
            'email_cliente' => $request->input('email', null), // email_cliente
            'telefono_cliente' => $request->input('phone', null), // phone (telefono_cliente)
            'direccion_cliente' => $request->input('cardetails', null), // cardetails (direccion_cliente)
            'ciudad_cliente' => $request->input('city', null), // city (ciudad_cliente)
            'estado_servico' => $request->input('state', null), // state (estado_servico)
            'codigo_postal_cliente' => $request->input('code', null), // code (codigo_postal_cliente)
            'peticion_cliente' => $request->input('request', null), // request (peticion_cliente)
            'descripcion_servicio' => $request->input('service', null), // service (descripcion_servicio)
            'fecha_servicio' => $request->input('fecha', null) // horario (fecha_servicio)
        ];

        // if ($validation->fails()) {
        //     return response()->json(['errors' => $validation->errors()], 422);
        // }

        // Almacena los datos
        $carro = Booking::create($mappedData);


        return response()->json(['message' => 'Carro almacenado exitosamente', 'data' => $carro], 201);
    }
}
