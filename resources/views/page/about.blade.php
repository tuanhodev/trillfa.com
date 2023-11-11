{{-- ------- page: /views/pages/about ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">
        {{ config('settings.ten-thuong-hieu') . ' | ' . 'Giới thiệu' }}
    </x-slot>

    <article class="about-container container mx-auto"> 

        <header class="cover">

            <div class="img">
                <img src="{{ asset('images/truyenthong/truyenthong-default.png') }}" alt="">
            </div>

            <div class="summary-container">
                <div class="summary">

                    <div class="trillium">
                        <img src="{{ asset('images/brand/trillium.png') }}" alt="">
                    </div>

                    <h3>Trill Studio có phải là một thương hiệu thời trang ?</h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et. 
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                    </p>

                </div>
            </div>

        </header>

        <div class="about-content-container">

            <div class="about-content">
                <div class="about">

                    <div class="red-trillium">
                        <img src="{{ asset('images/brand/red_trillium.png') }}" alt="">
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et. 
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, et. 
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                        Natus, dolores tempora qui tempore deleniti consequuntur deserunt rem cum.
                    </p>
                </div>
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
