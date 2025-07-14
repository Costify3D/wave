<x-mail::message>
# {{ $post->title }}

{!! $post->body !!}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>