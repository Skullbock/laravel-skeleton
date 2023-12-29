<x-layouts::html class="bg-gray-50">
    <x-slot:head>
        <script>
            window.locale = '{{ app()->getLocale() }}';
        </script>

{{--        @googlefonts--}}

        <!-- Styles -->
        @filamentStyles
        @vite('resources/css/app.css')

{{--        @include('googletagmanager::head')--}}

        @livewireStyles

    </x-slot:head>

    <x-slot:seo>
{{--        {!! $seo ?? seo() !!}--}}
    </x-slot:seo>

{{--    @include('googletagmanager::body')--}}

    {{ $slot }}

{{--    @routes--}}

    @stack('pre-scripts')

    @filamentScripts
    @vite('resources/js/app.js')

    @stack('scripts')

    @stack('modals')

    @livewireScripts

    @env('local')
        <script src="https://cdn.jsdelivr.net/gh/underground-works/clockwork-browser@1/dist/toolbar.js"></script>
    @endenv

    <livewire:offcanvas-component />

</x-layouts::html>
