<x-layouts.app>
    <x-slot name="pageTitle">{{ config('settings.ten-thuong-hieu') . ' | Trang chính' ?? config('app.name') }}</x-slot>
    <x-slot name="header">
        @livewire('partials.header')
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-light-base overflow-hidden sm:rounded-lg">
            <x-content.welcome />
        </div>
    </div>

</x-layouts.app>
