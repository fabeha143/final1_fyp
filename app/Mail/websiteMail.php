<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class websiteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $detailsweb;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detailsweb)
    {
        $this->detailsweb = $detailsweb;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('website/contactusmessage');
    }
}
