<x-layouts.app>
    <x-slot name="pageTitle">{{ config('settings.ten-thuong-hieu') . ' | Trang chính' ?? config('app.name') }}</x-slot>
    <x-slot name="header">
        @livewire('partials.header')
    </x-slot>

    <div class="main">
        <div class="main-container container mx-auto">
            <x-content.welcome />
        </div>
    </div>

</x-layouts.app>
