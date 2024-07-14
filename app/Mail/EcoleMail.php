<?php

namespace App\Mail;

use App\Models\Ecole;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EcoleMail extends Mailable
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
            subject: 'E-Mail destiné aux admins',
        );
    }

    /**
     * Get the message content definition.
     */
    
    public function build()
    {
        return $this->view('ecole.admin-mail')
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
