<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $fillable = ['name', 'marca_id', 'year', 'usage_rank', 'price', 'color'];

    /**
     * Relación inversa de muchos a uno con el modelo Marca
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
