<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'Olanrewajuayuba@gmail.com';
        $name = 'Ayuba';
        $subject = 'Welcome to the Subscription';
        return $this->view('emails.sendEmail')
            ->from($address, $name)
            ->subject($subject);
    }
}
