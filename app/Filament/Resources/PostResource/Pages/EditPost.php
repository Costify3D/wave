<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\User; 
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterMail;
use Wave\Post;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    // Diese Methode wird HINZUGEFÜGT oder ERSETZT, falls sie schon existiert.
    protected function getHeaderActions(): array
    {
        return [
            // Dies ist unsere neue "Senden"-Aktion
            Actions\Action::make('sendNewsletter')
                ->label('Send as Newsletter')
                ->color('success')
                ->icon('heroicon-o-paper-airplane')
                ->requiresConfirmation() // Fragt nach Bestätigung
                ->action(function (Post $record) {
                    
                    // Wir holen alle User, deren E-Mail verifiziert ist
                    $users = User::where('verified', true)->get();

                    // Wenn keine User gefunden werden, geben wir eine Meldung aus
                    if ($users->isEmpty()) {
                        \Filament\Notifications\Notification::make()
                            ->title('No verified users found')
                            ->warning()
                            ->send();
                        return; // Beendet die Aktion
                    }

                    // Wir senden die E-Mail an jeden gefundenen User
                    foreach ($users as $user) {
                        Mail::to($user)->send(new NewsletterMail($record));
                    }

                    // Erfolgsmeldung
                    \Filament\Notifications\Notification::make()
                        ->title('Newsletter sent successfully to ' . $users->count() . ' users.')
                        ->success()
                        ->send();
                }),

            // Die Standard-Löschen-Aktion von Filament wird beibehalten
            Actions\DeleteAction::make(),
        ];
    }
}