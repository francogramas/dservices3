<?php

namespace dservices\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class confirmacionPagoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pago;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pago)
    {
        $this->pago=$pago;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmacion de pago')
        ->view('mail.confirmacionPagoView');
    }
}
