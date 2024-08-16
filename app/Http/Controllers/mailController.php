<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function generatePDF()
    {
        // Datos para la vista
        $data = ['title' => 'My PDF Title', 'content' => 'This is the content of the PDF.'];

        // Generar el PDF
        $pdf = Pdf::loadView('pdf.template', $data);

        // Guardar el PDF en un archivo temporal
        $pdfPath = storage_path('app/public/pdf/my_pdf.pdf');
        $pdf->save($pdfPath);

        // Enviar el PDF por correo
        $this->sendEmailWithPDF($pdfPath);

        return response()->json(['message' => 'PDF generated and sent successfully']);
    }

    private function sendEmailWithPDF($pdfPath)
    {
        $email = 'recipient@example.com'; // Dirección de correo electrónico del destinatario

        Mail::send('emails.pdf', [], function ($message) use ($email, $pdfPath) {
            $message->to($email)
                    ->subject('Your PDF Document')
                    ->attach($pdfPath, [
                        'as' => 'document.pdf',
                        'mime' => 'application/pdf',
                    ]);
        });
    }
}
