<?php

namespace App\Models;

use App\Observers\BookingObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([BookingObserver::class])]
class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'color',
        'servicio_extra',
        'nombre',
        'fecha',
        'nombre_cliente',
        'apellido_cliente',
        'email_cliente',
        'telefono_cliente',
        'direccion_cliente',
        'ciudad_cliente',
        'estado_servico',
        'codigo_postal_cliente',
        'peticion_cliente',
        'descripcion_servicio',
        'dirt_charges',
        'acepto_veicle',
        'la_tos',
        'fecha_servicio',
    ];

}
