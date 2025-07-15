<x-mail::message>
{{-- Der Titel des Blog-Posts als Überschrift in der E-Mail --}}
# {{ $post->title }}

{{-- Der Inhalt des Blog-Posts. Der Markdown-Parser kümmert sich um die sichere Darstellung. --}}
{!! $post->body !!}

{{-- Ein Button, um zum originalen Blog-Post auf der Webseite zu gelangen --}}
<x-mail::button :url="url('blog/' . $post->slug)">
@lang('Read on our Website')
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}

{{-- ========================================================== --}}
{{--                        ABMELDE-FOOTER                      --}}
{{-- ========================================================== --}}
{{-- Wir fügen den Abmelde-Link in den dafür vorgesehenen Footer-Slot ein. --}}
@slot('footer')
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')

<p style="text-align: center; margin-top: 10px;">
    @lang('If you no longer wish to receive these emails, you can') <a href="{{ $user->unsubscribeUrl() }}">@lang('unsubscribe here')</a>.
</p>
</x-mail::footer>
@endslot

</x-mail::message>