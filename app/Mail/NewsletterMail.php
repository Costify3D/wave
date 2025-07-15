<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Wave\Post;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Die Instanz des Blog-Posts.
     *
     * @var \Wave\Post
     */
    public Post $post;

    /**
     * Die Instanz des Empfängers.
     *
     * @var \App\Models\User
     */
    public User $user;

    /**
     * Erstellt eine neue Nachrichten-Instanz.
     *
     * @param  \Wave\Post  $post
     * @param  \App\Models\User  $user
     * @return void
     */
    public function __construct(Post $post, User $user)
    {
        $this->post = $post;
        $this->user = $user;
    }

    /**
     * Definiert den Umschlag der Nachricht (Absender, Betreff).
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new \Illuminate\Mail\Mailables\Address(config('mail.from.address'), config('mail.from.name')),
            subject: $this->post->title,
        );
    }

    /**
     * Definiert den Inhalt der Nachricht (die View).
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.newsletter',
        );
    }

    /**
     * Definiert die Anhänge für die Nachricht.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}