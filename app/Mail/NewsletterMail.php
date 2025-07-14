<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Wave\Post; // Wir verwenden das Post-Model von Wave

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new \Illuminate\Mail\Mailables\Address(config('mail.from.address'), config('mail.from.name')),
            subject: $this->post->title,
        );
    }

    public function content(): Content
    {
        return new Content(
            // Wir verwenden Markdown, das ist für E-Mails ideal
            markdown: 'emails.newsletter', 
        );
    }
}