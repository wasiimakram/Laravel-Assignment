<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MassMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailText;
    public $subject;
    public $fromEmail;
    public $fromName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $subject, $fromEmail, $fromName)
    {
        $this->emailText = $message;
        $this->subject = $subject;
        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $emailText = $this->emailText;
        $subject = $this->subject;
        $fromEmail = $this->fromEmail;
        $fromName = $this->fromName;
        return $this->from($fromEmail, $fromName)->subject($subject)->view('mail.mass',compact('emailText'));
    }
}
