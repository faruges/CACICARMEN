<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CaciMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public $dir;
    public function __construct($dir,$data)
    {
        $this->data = $data;
        $this->dir = $dir;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->dir)
                    ->view('testmail')
                    ->subject('Notificacion de CACI')
                    ->with($this->data);
    }
}
