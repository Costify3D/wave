<?php

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



use Wave\Http\Controllers\Auth\RegisterController as AuthRegisterController;

class RegisterController extends AuthRegisterController
{
    public function register(Request $request)
    {
        // Sprache aus dem Browser ziehen (de/en)
        $locale = $request->getPreferredLanguage(['de', 'en']);
        app()->setLocale($locale);

        // User erstellen
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'language' => $locale, // optional speichern
        ]);

        // Notification verschicken
        $user->notify(new \Wave\Notifications\VerifyEmail($user));

        // Weiterleitung oder Login
        return redirect('/dashboard'); // oder wie auch immer Wave das macht
    }
}