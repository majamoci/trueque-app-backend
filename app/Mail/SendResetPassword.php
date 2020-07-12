<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// https://sendgrid.com/docs/for-developers/sending-email/laravel/
// Enviar emails con sendgrid en produccion
class SendResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Cambio de Contraseña";

    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code)
    {
        $this->msg = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reset-password');
    }
}
