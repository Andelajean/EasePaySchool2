<?php

namespace App\Mail;

use App\Models\Banque;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompteResetB extends Mailable
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
            subject: 'Réinitialisation du mot de passe',
        );
    }

    /**
     * Get the message content definition.
     */
    public function mailuser(){
        return $this->view('banque.emailresetp')
                    ->subject('Vous venez de réinitialiser votre mot de passe')
                    ->with('contact', $this->user);
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
