<footer class="py-4 bg-black text-white">
    <div class="container mx-auto">
        {{ $this->showCookieModalAction }}
    </div>

    {{-- Cookiebar --}}
    <livewire:cookiebar />

    <x-filament-actions::modals/>
</footer>
