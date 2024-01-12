<x-layouts::base class="flex flex-col h-full">

    <x-layouts::sections.navbar />

    <!-- Page Content -->
    <main class="flex-1 flex flex-col h-full">
        {{ $slot }}
    </main>

    <x-layouts::sections.footer />

</x-layouts::base>
