<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

     
    protected $fillable = ['brand'];



    /**
     * Relación uno a muchos con el modelo Modelo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
