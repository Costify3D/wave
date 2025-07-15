<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Wave\Traits\HasProfileKeyValues;
use Wave\User as WaveUser;

class User extends WaveUser
{
    use HasProfileKeyValues, Notifiable;

    public $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'avatar',
        'password',
        'role_id',
        'verification_code',
        'verified',
        'trial_ends_at',
        'newsletter_subscribed', // Geändert von 'newsletter_subscription_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'trial_ends_at' => 'datetime',
        'newsletter_subscribed' => 'boolean', // HINZUGEFÜGT: Stellt sicher, dass Laravel dies als true/false behandelt
    ];


    protected static function boot()
    {
        parent::boot();

        // Listen for the creating event of the model
        static::creating(function ($user) {
            // Check if the username attribute is empty
            if (empty($user->username)) {
                // Use the name to generate a slugified username
                $username = Str::slug($user->name, '');
                $i = 1;
                while (self::where('username', $username)->exists()) {
                    $username = Str::slug($user->name, '').$i;
                    $i++;
                }
                $user->username = $username;
            }
        });

        // Listen for the created event of the model
        static::created(function ($user) {
            // Remove all roles
            $user->syncRoles([]);
            // Assign the default role
            $user->assignRole(config('wave.default_user_role', 'registered'));
        });
    }

    /**
     * Generiert eine sichere, signierte URL für die Newsletter-Abmeldung.
     *
     * @return string
     */
    public function unsubscribeUrl(): string
    {
        // Erzeugt eine signierte URL, die 24 Stunden lang gültig ist.
        // Die URL zeigt auf die 'newsletter.unsubscribe'-Route.
        return URL::temporarySignedRoute(
            'newsletter.unsubscribe',
            now()->addHours(24),
            [
                'user' => $this->id,
                // Ein zufälliger Token, um den Link noch einzigartiger zu machen
                'token' => Str::random(16) 
            ]
        );
    }
}