<?php

namespace App\Observers;

use App\Mail\HelloMail;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;

class BookingObserver
{
    /**  
     * Handle the Booking "created" event.
     */
    public function created(Booking $booking): void
    {
          // Envía el correo cuando un nuevo Booking se ha creado
        Mail::to('javierteheran19@gmail.com')->send(new HelloMail($booking));
    }

    /**
     * Handle the Booking "updated" event.
     */
    public function updated(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "deleted" event.
     */
    public function deleted(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "restored" event.
     */
    public function restored(Booking $booking): void
    {
        //
    }

    /**
     * Handle the Booking "force deleted" event.
     */
    public function forceDeleted(Booking $booking): void
    {
        //
    }
}
