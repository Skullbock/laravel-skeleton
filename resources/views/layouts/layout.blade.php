<x-layouts::base>
    <x-slot:seo>
{{--        {!! $seo ?? seo() !!}--}}
    </x-slot:seo>

    <!-- Page Content -->
    <main class="flex-1 flex flex-col h-full">
        {{ $slot }}
    </main>

</x-layouts::base>
