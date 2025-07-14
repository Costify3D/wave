<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Die Daten aus dem Formular.
     *
     * @var array
     */
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // Der Absender ist der User, der das Formular ausgefüllt hat.
            // Mailgun wird dies umschreiben, aber der "Reply-To" Header wird korrekt gesetzt.
            from: new Address($this->data['email'], $this->data['name']),
            // Der Empfänger ist Ihr Support-Team
            to: [new Address('support@costify3d.com', 'Costify3D Support')],
            subject: 'Neue Kontaktanfrage von Costify3D',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // Hier verweisen wir auf unsere Blade-Vorlage
            view: 'emails.contact-form',
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