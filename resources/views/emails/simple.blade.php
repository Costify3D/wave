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
@slot('footer')
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('mail_contact.all_rights_reserved')

<p style="text-align: center; margin-top: 10px;">
    @lang('mail_contact.unsubscribe') <a href="{{ $user->unsubscribeUrl() }}">@lang('mail_contact_unsubscribe here')</a>.
</p>
</x-mail::footer>
@endslot

</x-mail::message>