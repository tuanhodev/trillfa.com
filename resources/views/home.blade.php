
{{-- ------- page: views.home ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">{{ config('settings.ten-thuong-hieu') . ' | Trang chính' ?? config('app.name') }}</x-slot>

    <x-slot name="metaKeywords">{{ __('Trang chia sẻ kiến thức về phần mềm thiết kế thời trang, thiết kế 3D, Blender 3D, krita, inkscape, thiết kế rập thời trang, may mẫu, nhận làm rập thời trang') }}</x-slot>
    <x-slot name="metaNewsKeywords">{{ __('Trang chia sẻ kiến thức về phần mềm thiết kế thời trang, thiết kế 3D, Blender 3D, krita, inkscape, thiết kế rập thời trang, may mẫu, nhận làm rập thời trang') }}</x-slot>

    <x-slot name="header"><x-partials.header /></x-slot>

    {{-- component: resources/views/home.blade.php --}}
    <x-content.welcome />

    <div class="footer-header"> </div>

</x-layouts.app>
