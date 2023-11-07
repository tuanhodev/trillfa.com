{{-- ------- page: /views/pages/about ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">
        {{ config('settings.ten-thuong-hieu') . ' | Giới thiệu' ?? config('app.name') }}
    </x-slot>

    <article class="main-container container mx-auto"> 

        <header class="article-container">
            <img src="{{ asset('images/truyenthong/truyenthong-default.png') }}" alt="">
        </header>

        <div class="summary-container">
            <div class="summary">
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Eligendi quam natus eveniet expedita.</p>
                <p>Odio rerum doloribus illo eum.</p>
                <p>At voluptatem quis consequatur sint.</p>
            </div>
        </div>

        <div class="about-container">
            <div class="about">
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Eligendi quam natus eveniet expedita.</p>
                <p>Odio rerum doloribus illo eum.</p>
                <p>At voluptatem quis consequatur sint.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Eligendi quam natus eveniet expedita.</p>
                <p>Odio rerum doloribus illo eum.</p>
                <p>At voluptatem quis consequatur sint.</p>
            </div>
        </div>

        <div class="contact-container">
            <div class="contact">
                <div class="contact-item">
                    <x-orchid-icon path="bs.folder" />
                    <p>Văn phòngi: Tân Phú, TP.Hồ Chí Minh</p>
                </div>
                <div class="contact-item">
                    <x-orchid-icon path="bs.folder" />
                    <p>SĐT: 0909 123 456</p>
                </div>
                <div class="contact-item">
                    <div class="zalo-icon">ZL</div>
                    <p>0909 123 456</p>
                </div>
                <div class="contact-item">
                    <x-orchid-icon path="bs.folder" />
                    <p>Email: trill.studio@gmail.com</p>
                </div>
            </div>
        </div>


    </article>

    <div class="footer-header"> </div>

</x-layouts.app>
