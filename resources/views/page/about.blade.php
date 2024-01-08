{{-- ------- page: /views/pages/about ---------- --}}
<x-layouts.app>

    <x-slot name="pageTitle">
        {{ config('settings.ten-thuong-hieu') . ' | ' . 'Giới thiệu' }}
    </x-slot>

    <x-slot name="metaDes">{{ config('settings.description') }}</x-slot>

    <article class="about-container container mx-auto">

        <x-orchid-breadcrumbs />

        <div class="about-content-container">

            <div class="about-content">
                {!! $aboutContent !!}
            </div>

            <div class="contact-container">
                <div class="contact">
                    <div class="contact-item">
                        <x-orchid-icon path="bs.geo-alt" />
                        <p>Địa chỉ: {{ config('settings.dia-chi') }}</p>
                    </div>
                    <div class="contact-item">
                        <x-orchid-icon path="bs.envelope" />
                        <p>Email: {{ config('settings.email') }}</p>
                    </div>
                    <div class="contact-item">
                        <x-orchid-icon path="bs.telephone" />
                        <p>SĐT: {{ config('settings.so-dien-thoai') }}</p>
                    </div>
                    <div class="contact-item">
                        <div class="zalo-icon">ZL</div>
                        <p>{{ config('settings.so-dien-thoai') }}</p>
                    </div>
                </div>
            </div>
        </div>

    </article>

    <div class="footer-header"> </div>

</x-layouts.app>
