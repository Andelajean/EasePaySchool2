<?php

namespace App\Mail;

use App\Models\Banque;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompteMailb extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedData;
    public function __construct(Banque $validatedData)
    {
        $this->validatedData=$validatedData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bienvenue dans notre application',
        );
    }

    /**
     * Get the message content definition.
     */
    public function mailuser()
    {
        return $this->subject('Votre compte a été créé avec succès')
                    ->view('banque.gest-compte')
                    ->with(['userData' => $this->validatedData]);
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
