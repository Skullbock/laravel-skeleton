<x-layouts::base class="flex flex-col h-full">

    <x-layouts::sections.navbar />

    <!-- Page Content -->
    <main class="flex-1 flex flex-col h-full">
        {{ $slot }}
    </main>

    {{-- Footer and Cookiebar --}}
    <livewire:footer />

</x-layouts::base>
