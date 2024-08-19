<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'precio_servicio', 'tiempo_servicio'];

    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
