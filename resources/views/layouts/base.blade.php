<x-layouts::html class="bg-gray-50">
    <x-slot:head>
        <script>
            window.locale = '{{ app()->getLocale() }}';
        </script>

        <!-- Styles -->
        @filamentStyles
        @vite('resources/css/app.css')

        @env('production')
            @include('googletagmanager::head')
        @endenv

        @livewireStyles

    </x-slot:head>

    <x-slot:seo>
        {!! $seo ?? seo() !!}
    </x-slot:seo>

    @env('production')
        @include('googletagmanager::body')
    @endenv

    {{ $slot }}

    @stack('pre-scripts')

    @filamentScripts
    @vite('resources/js/app.js')

    @stack('scripts')

    @stack('modals')

    @livewireScripts

    @env('local')
        <script src="https://cdn.jsdelivr.net/gh/underground-works/clockwork-browser@1/dist/toolbar.js"></script>
    @endenv

</x-layouts::html>
