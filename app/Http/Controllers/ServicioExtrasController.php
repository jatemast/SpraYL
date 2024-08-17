<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceExtra;

class ServicioExtrasController extends Controller
{
    public function index()
    {
        $serviceExtras = ServiceExtra::all(); // Usa el modelo correcto
        return response()->json($serviceExtras);
    }
}
