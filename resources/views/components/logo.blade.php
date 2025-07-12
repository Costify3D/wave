<a href="/">
    @php
        $lightModeStyle = 'display: block;';
        $darkModeStyle = 'display: none;';
    @endphp

    <style>
        html.dark .logo-light-mode { display: none; }
        html.dark .logo-dark-mode { display: block; }
    </style>

    <!-- Logo für Light Mode -->
    <img {{ $attributes->merge(['class' => 'logo-light-mode rounded-md border-2 border-primary']) }}
         src="{{ asset('images/logo_light.webp') }}" 
         alt="Costify3D Logo"
         style="{{ $lightModeStyle }}">

    <!-- Logo für Dark Mode -->
    <img {{ $attributes->merge(['class' => 'logo-dark-mode rounded-md border-2 border-primary']) }}
         src="{{ asset('images/logo_dark.webp') }}" 
         alt="Costify3D Logo"
         style="{{ $darkModeStyle }}">
</a>