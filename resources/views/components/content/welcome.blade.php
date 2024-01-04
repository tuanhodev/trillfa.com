<section class="content">

    <div class="content-container">

        <!-- Welcome header -->
        <div class="container mx-auto">
            <x-partials.welcome-header :featured="$featured" />
        </div>

        <div class="content-body">

            <x-widget-tag tagTitle="Tag nổi bật" class="container mx-auto" />

            <div class="container mx-auto">

                <x-widget.featured-widget widgetTitle="Bài đăng mới" class="widget-margin-top" />

                <!-- {{-- Nut xem them --}} -->
                <div class="view-more">
                    <a href="{{ route('blog.index') }}">
                        <p>Xem nhiều hơn</p>
                        <x-orchid-icon path="arrow-right" />
                    </a>
                </div>

            </div>

            <div class="container mx-auto">
                <x-widget.img-banners truyenthongGroup="home-banners-1" />
            </div>
            {{-- TODO: widget bài viết nổi bật --}}
            <!-- {{-- Collection 
            <div class="container mx-auto">
            </div>
            --}} -->

        </div>

    </div>

</section>
