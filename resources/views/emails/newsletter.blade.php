<x-mail::message>
{{-- Der Titel des Blog-Posts als Überschrift in der E-Mail --}}
# {{ $post->title }}

{{-- Der Inhalt des Blog-Posts. Der Markdown-Parser kümmert sich um die sichere Darstellung. --}}
{!! $post->body !!}

{{-- Ein Button, um zum originalen Blog-Post auf der Webseite zu gelangen --}}
<x-mail::button :url="url('blog/' . $post->slug)">
@lang('mail_contact.read_on_website')
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}

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