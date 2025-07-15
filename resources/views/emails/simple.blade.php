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
{{--            Unsubsribe                                      --}}
{{-- ========================================================== --}}
@slot('footer')
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')

<p style="text-align: center; margin-top: 10px;">
@lang('If you no longer wish to receive these emails, you can') <a href="{{ $user->unsubscribeUrl() }}">@lang('unsubscribe here')</a>.
</p>
</x-mail::footer>
@endslot

</x-mail::message>