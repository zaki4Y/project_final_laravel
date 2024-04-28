<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $name;
    public $email;

    public $phone;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
{
  $this->name = $data['name'];
  $this->email = $data['email'];
  $this->phone = $data['phone'];
  $this->message = $data['message'];
}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Us Message')
                    ->from($this->email, $this->name)
                    ->to(config('mail.from.address')) // Replace with your recipient email
                    ->markdown('mail.contact'); // Point to your contact email template
    }
}

