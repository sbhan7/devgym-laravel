<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;
    private $byte;

    public function __construct($byte )
    {
        $this->byte = $byte;

    }

    public function build()
    {
        return $this->subject('فراموشی رمزعبور')->view('pages.mail.mail', [
            'link'=> $this->byte
        ]);
    }
}
