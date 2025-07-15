<x-mail::message>
# Hallo {{ $user->name }},

hier sind die neuesten Updates von Costify3D!

... Ihr eigentlicher Newsletter-Inhalt hier ...

<x-mail::button :url="route('home')">
Zum Dashboard
</x-mail::button>

Viele Grüße,<br>
Ihr {{ config('app.name') }}-Team

{{-- ========================================================== --}}
{{--                        ABMELDE-FOOTER                      --}}
{{-- ========================================================== --}}

<p style="text-align: center; color: #718096; font-size: 12px; line-height: 1.5;">
    @lang('mail_contact.unsubscribe') <a href="{{ $user->unsubscribeUrl() }}" style="color: #3b82f6;">@lang('mail_contact.unsubscribe here')</a>.
</p>

</x-mail::message>