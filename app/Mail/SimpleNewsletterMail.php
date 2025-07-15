<?php

namespace App\Mail;

use App\Models\User; // Das User-Model importieren
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SimpleNewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Die Benutzer-Instanz.
     *
     * @var \App\Models\User
     */
    public $user; // Wir machen die Variable public, damit sie in der View verfügbar ist

    /**
     * Erstellt eine neue Nachrichten-Instanz.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Definiert den Umschlag (Betreff, Absender) der Nachricht.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new \Illuminate\Mail\Mailables\Address('newsletter@costify3d.com', 'Costify3D News'),
            subject: 'Your Weekly Update from Costify3D',
        );
    }

    /**
     * Definiert den Inhalt der Nachricht.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        // Wir verweisen auf eine neue E-Mail-View
        return new Content(
            markdown: 'emails.newsletter.simple', // Wir verwenden eine Markdown-E-Mail für schönes Standard-Styling
        );
    }
}