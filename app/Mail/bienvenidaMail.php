<?php

namespace dservices\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class bienvenidaMail extends Mailable
{
    use Queueable, SerializesModels;
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario)
    {
        $this->usuario=$usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Correo de registro')
        ->view('mail.subscripcionView');
    }
}
