<x-layouts::html  {{ $attributes }}>
    @push('head')
        <script>window.locale = '{{ app()->getLocale() }}';</script>

        {{-- Filament Styles --}}
        @filamentStyles

        {{-- Our styles and scripts--}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Tag Manager --}}
        @env('production')
            @include('googletagmanager::head')
        @endenv

        @livewireStyles
    @endpush

    {{-- Tag Manager --}}
    @env('production')
        @include('googletagmanager::body')
    @endenv

    {{-- Content --}}
    {{ $slot }}

    {{-- Filament Scripts --}}
    @filamentScripts


    {{-- Debug Bar --}}
    @env('local')
        <script src="//cdn.jsdelivr.net/gh/underground-works/clockwork-browser@1/dist/toolbar.js"></script>
    @endenv

</x-layouts::html>
