<?php

namespace App\Http\Controllers;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function sendHelloMail()
{
    Mail::to('javicellcartagena@gmail.com')->send(new HelloMail());
    return response()->json('El correo ha sido enviado exitosamente');
}
}
