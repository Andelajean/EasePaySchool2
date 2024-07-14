<?php

namespace App\Mail;

use App\Models\Banque;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminBanqueMailReset extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public function __construct(Banque $user)
    {
       $this->user=$user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Un utilisateur a réinitialiser son mot de passe',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->view('pay.email-banque-resetp')
                   ->with('Banque', $this->user);
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
