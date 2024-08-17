<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceExtra extends Model
{
    use HasFactory;

      // Define los atributos que se pueden asignar masivamente
      protected $fillable = [
        'service',
        'description',
    ];
}
