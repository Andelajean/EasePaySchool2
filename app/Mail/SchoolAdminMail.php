<?php

namespace App\Mail;

use App\Models\Ecole;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SchoolAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ecole;
    public function __construct(Ecole $ecole)
    {
        $this->ecole=$ecole;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'E-Mail destinés aux établissement',
        );
    }

    /**
     * Get the message content definition.
     */
      public function mailuser(){
        return $this->view('ecole.shool-mail')
                    ->subject('Merci de nous avoir contacter')
                    ->with('Ecole', $this->ecole);
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
