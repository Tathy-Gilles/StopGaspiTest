<?php

namespace App\Mail;

use App\User;
use App\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdviserCreateAppointment extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $appointment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct(User $user, Appointment $appointment)
     {
         $this->user = $user;
         $this->appointment = $appointment;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.adviser-create-appointment');
    }
}
