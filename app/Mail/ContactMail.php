<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class ContactMail extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $name;
    public $email;
    public $subject;
    public $message;


    public function __construct($user_name, $user_email, $user_subject, $user_message)
    {
         $this->name = $user_name;
         $this->email = $user_email;
         $this->subject = $user_subject;
         $this->message = $user_message;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('sabbir@climaxitsystem.com', $this->name),
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.contact',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
