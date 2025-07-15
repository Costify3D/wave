<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Fügt die neue Spalte 'newsletter_subscribed' hinzu.
            // boolean: speichert 1 für true, 0 für false.
            // default(false): Neue User sind standardmäßig NICHT angemeldet (Opt-in).
            // after('remember_token'): Platziert die Spalte nach der 'remember_token'-Spalte für die Übersichtlichkeit.
            $table->boolean('newsletter_subscribed')->default(false)->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Dieser Code wird ausgeführt, wenn die Migration rückgängig gemacht wird.
            $table->dropColumn('newsletter_subscribed');
        });
    }
};