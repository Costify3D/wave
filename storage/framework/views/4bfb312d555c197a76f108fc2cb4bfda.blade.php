<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-phosphor-book-open-text-duotone  {{ $attributes }}>

{{ $slot ?? "" }}
</x-phosphor-book-open-text-duotone>