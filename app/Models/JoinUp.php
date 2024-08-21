<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUp extends Model
{
    use HasFactory;


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
        'daysAvailableToWork'
    ];
}
