<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailUser extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public function __construct(Contact $contact)
    {
        $this->contact=$contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'E-mail envoyés à nos utilisateurs',
        );
    }

    /**
     * Get the message content definition.
     */
    public function mailuser(){
        return $this->view('pay.mailuser')
                    ->subject('Merci de nous avoir contacter')
                    ->with('contact', $this->contact);
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
