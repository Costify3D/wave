<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\User; 
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterMail;
use Wave\Post;
// HINZUGEFÜGT: Wird für die Erfolgs- und Warnmeldungen benötigt
use Filament\Notifications\Notification;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Dies ist unsere "Senden"-Aktion
            Actions\Action::make('sendNewsletter')
                ->label('Send as Newsletter')
                ->color('success')
                ->icon('heroicon-o-paper-airplane')
                ->requiresConfirmation() // Fragt nach Bestätigung
                ->action(function (Post $record) {
                    
                    // ===================================================================
                    //            HIER IST DIE KORRIGIERTE ABFRAGE
                    // ===================================================================
                    $users = User::where('verified', true)
                                ->where('newsletter_subscribed', true) // Prüft auf den boolean 'true' Wert
                                ->get();

                    // Wenn keine User gefunden werden, geben wir eine Meldung aus
                    if ($users->isEmpty()) {
                        Notification::make()
                            ->title('No subscribed users found') // Angepasste Nachricht
                            ->warning()
                            ->send();
                        return; // Beendet die Aktion
                    }

                    // ===================================================================
                    //            HIER IST DIE ANGEPASSTE VERSANDLOGIK
                    // ===================================================================
                    foreach ($users as $user) {
                        // Wir übergeben jetzt den Post ($record) UND den User ($user)
                        Mail::to($user)->send(new NewsletterMail($record, $user));
                    }

                    // Erfolgsmeldung
                    Notification::make()
                        ->title('Newsletter sent successfully to ' . $users->count() . ' subscribers.') // Angepasste Nachricht
                        ->success()
                        ->send();
                }),

            // Die Standard-Löschen-Aktion von Filament wird beibehalten
            Actions\DeleteAction::make(),
        ];
    }
}