<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service_extra;

class serviciosextras extends Controller
{
    public function index()
    {
        $serviceExtras = service_extra::all(); // Usa el nombre correcto del modelo
        return response()->json($serviceExtras);
    }




}
