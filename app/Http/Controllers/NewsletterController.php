<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class NewsletterController extends Controller
{
    /**
     * Zeigt das Formular zur Abmeldung an.
     */
    public function showUnsubscribeForm(Request $request, User $user)
    {
        // Validiert die signierte URL. Wenn ungültig, bricht es mit Fehler 401 ab.
        if (! URL::hasValidSignature($request)) {
            // Wir können hier auch eine schönere Fehlerseite anzeigen
            abort(401, __('newsletter.unsubscribe_error_invalid'));
        }

        // Gibt die View zurück und übergibt die User- und Request-Daten
        return view('theme::newsletter.unsubscribe', [
            'user' => $user,
            'request' => $request, // Wird benötigt, um den Token im Formular zu übergeben
        ]);
    }

    /**
     * Verarbeitet die Abmeldung aus dem Formular.
     */
    public function processUnsubscribe(Request $request)
    {
        // Validiert die Formulareingaben
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'email' => 'required|email',
            'token' => 'required|string',
            'reason' => 'required|string',
            'other_reason' => 'nullable|string|max:500',
        ]);

        $user = User::find($validated['user_id']);

        // Sicherheitsprüfung: Stimmt die E-Mail überein?
        if ($user->email !== $validated['email']) {
            return back()->withErrors(['email' => __('newsletter.unsubscribe_error_email')]);
        }

        // Status aktualisieren
        $user->newsletter_subscription_status = 'unsubscribed';
        $user->save();

        // Optional: Den Grund für spätere Analysen loggen
        Log::channel('daily')->info('Newsletter Unsubscription', [
            'user_id' => $user->id, 
            'reason' => $validated['reason'], 
            'other_text' => $validated['other_reason']
        ]);

        // Zeigt eine finale Bestätigungsseite oder eine Nachricht an.
        // Für eine schönere Seite könnten Sie hier eine View zurückgeben.
        return back()->with('status', __('newsletter.unsubscribe_success'));
    }
}