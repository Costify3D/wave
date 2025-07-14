<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(\Illuminate\Http\Request $request, \Closure $next)
    {
    // Prüft, ob eine Sprache in der Session gespeichert ist
    if (session()->has('locale')) {
        // Prüft, ob es eine erlaubte Sprache ist
        if (in_array(session('locale'), ['en', 'de'])) {
            // Setzt die Sprache für die aktuelle Anfrage
            app()->setLocale(session('locale'));
        }
    }
    
    return $next($request);
}
}
