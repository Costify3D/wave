<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:80',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'attachment' => 'nullable|file|max:20480',
        ]);

        // LOGIK FÜR DEN DATEIUPLOAD
        if ($request->hasFile('attachment')) {
            // Wir speichern den Dateipfad im $data-Array, um ihn an die Mail zu übergeben
            $data['attachment'] = $request->file('attachment');
        }

        // Senden der E-Mail
        Mail::send(new ContactFormMail($data));

        return back()->with('success', 'Vielen Dank! Ihre Nachricht wurde gesendet.');
    }
}