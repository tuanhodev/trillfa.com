{{-- ------- page: views.home ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">{{ config('settings.ten-thuong-hieu') . ' | Trang chính' ?? config('app.name') }}</x-slot>

    <x-slot name="header"><x-partials.header /> </x-slot>

    <x-content.welcome />

    <div class="footer-header"> </div>

</x-layouts.app>
