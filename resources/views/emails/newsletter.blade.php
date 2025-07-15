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

<p style="text-align: center; color: #718096; font-size: 12px; line-height: 1.5;">
    @lang('mail_contact.unsubscribe') <a href="{{ $user->unsubscribeUrl() }}" style="color: #3b82f6;">@lang('mail_contact.unsubscribe here')</a>.
</p>

</x-mail::message>