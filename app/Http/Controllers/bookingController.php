<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Booking;
use App\Models\JoinUp;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'marca_id' => 'required|integer',
            'modelo_id' => 'required|integer',
            'anio' => 'required|integer|digits:4',
            'color' => 'required|string|max:255',
            'servicio_extra' => 'nullable|string|max:255',
            'nombre_cliente' => 'required|string|max:255',
            'apellido_cliente' => 'required|string|max:255',
            'email_cliente' => 'required|email|max:255',
            'telefono_cliente' => 'required|string|max:15',
            'direccion_cliente' => 'required|string|max:255',
            'ciudad_cliente' => 'required|string|max:255',
            'estado_cliente' => 'required|string|max:255',
            'codigo_postal_cliente' => 'required|string|max:10',
            'peticion_cliente' => 'nullable|string|max:255',
            'descripcion_servicio' => 'nullable|string|max:255',
            'dirt_charges' => 'required',
            'acepto_veicle' => 'required',
            'la_tos' => 'required',
            'fecha_servicio' => 'required|date',
            'hora_servicio' => 'required|string|max:10',
            'tiempo_estimado' => 'required',
            'precio_estimado' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), "message" => "Faltan algunos campos", "type" => "error"]);
        }
        $horaServicio = $request->input('hora_servicio');
        $horaServicio24h = Carbon::createFromFormat('g:i a', $horaServicio)->format('H:i:s');

        $bookingData = $validator->validated();
        $bookingData['hora_servicio'] = $horaServicio24h;

        $booking = Booking::create($bookingData);

        return response()->json(["message" => "Booking Creado Exitosamente", "type" => "success"], 201);




        // Almacena los datos
        $carro = Booking::create($mappedData);


        return response()->json(['message' => 'Booking creado Exitosamente.', 'data' => $carro], 201);
    }


    public function JoinUp(Request $request)
    {
        try {
            $validatedData = $request->validate([

                'fullName' => 'nullable|string|max:255',
                'birthdate' => 'nullable|date',
                'address' => 'nullable|string|max:255',
                'phoneNumber' => 'nullable|string|max:20',
                'email' => 'nullable|string|email|max:255|unique:join_ups',
                'previousExperience' => 'nullable|string|in:Yes,No|max:3',
                'experienceDescription' => 'nullable|string',
                'hasOwnTransportation' => 'nullable|string|in:Yes,No|max:3',
                'doesWorkWeekendsAndHolidays' => 'nullable|string|in:Yes,No|max:3',
                'daysAvailableToWork' => 'nullable|array',
                'daysAvailableToWork.*' => 'string|max:10', // Limitar longitud de los días
            ]);



            $joinUp = JoinUp::create(array_merge(
                $validatedData,
                ['daysAvailableToWork' => json_encode($validatedData['daysAvailableToWork'])]
            ));

            return response()->json(['message' => 'Datos almacenados exitosamente', 'success' => true], 201);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Error en la validación de los datos', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error inesperado al procesar la solicitud', 'error' => $e->getMessage()], 500);
        }
    }
}
