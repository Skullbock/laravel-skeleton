<x-layouts::html  {{ $attributes }}>
    @push('head')
        <script>window.locale = '{{ app()->getLocale() }}';</script>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        {{-- Filament Styles --}}
        @filamentStyles

        {{-- Our styles and scripts--}}
        @vite(['resources/css/app.css'])

        @stack('styles')

        {{-- Tag Manager and Google Consent Model basics --}}
        @include('cookiebar::head')
    @endpush

    {{-- Tag Manager --}}
    @include('googletagmanager::body')

    {{-- Content --}}
    {{ $slot }}

    {{-- Filament Scripts --}}
    @filamentScripts

    {{-- Our Scripts --}}
    @vite(['resources/js/app.js'])
    @stack('scripts')

    {{-- Debug Bar --}}
    @env('local')
        <script src="//cdn.jsdelivr.net/gh/underground-works/clockwork-browser@1/dist/toolbar.js"></script>
    @endenv

</x-layouts::html>
