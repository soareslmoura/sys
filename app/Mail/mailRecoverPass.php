<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailRecoverPass extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;


    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail/userRecoverPass')->with(['data'=> $this->data]);
    }
}
