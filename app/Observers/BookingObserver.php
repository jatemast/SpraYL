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
        $emailContent = new HelloMail($booking);
        Mail::to('javierteheran19@gmail.com')->send($emailContent);
        if ($booking->email_cliente) {
            Mail::to($booking->email_cliente)->send($emailContent);
        }
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
