{{-- -----------------------------------------
            page: /views/home 
------------------------------------------ --}}

<x-layouts.app>

    <x-slot name="pageTitle">{{ config('settings.ten-thuong-hieu') . ' | Trang chính' ?? config('app.name') }}</x-slot>

    <x-slot name="header"><x-partials.header /> </x-slot>


    <section class="main-container container mx-auto">

        <x-content.welcome />

    </section>


    <div class="footer-header">
        <x-widget-tag class="container mx-auto" />
    </div>

</x-layouts.app>
