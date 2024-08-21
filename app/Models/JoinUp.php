<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUp extends Model
{
    use HasFactory;


      // Los atributos que se pueden asignar en masa
      protected $fillable = [
        'fullName',
        'birthdate',
        'address',
        'phoneNumber',
        'email',
        'previousExperience',
        'experienceDescription',
        'hasOwnTransportation',
        'doesWorkWeekendsAndHolidays',
        'daysAvailableToWork',
    ];

    // Cast para convertir el campo JSON a un array
    protected $casts = [
        'daysAvailableToWork' => 'array',
    ];
}
