<x-layouts.app>
    <x-slot name="header">
        @livewire('partials.header')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-content.welcome />
            </div>
        </div>
    </div>
</x-layouts.app>
