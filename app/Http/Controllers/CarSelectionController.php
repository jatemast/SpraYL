<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class CarSelectionController extends Controller
{
    public function marca()
    {
        $marcas = Marca::all();
        return response()->json($marcas);
    }
}
