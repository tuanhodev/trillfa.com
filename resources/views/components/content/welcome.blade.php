<section class="content">

    <div class="content-container">

        <!-- Welcome header -->
        <x-partials.welcome-header :featured="$featured" />

        <div class="content-body">

            <x-widget.featured-widget widgetTitle="Bài đăng mới" :postFeatured="$postFeatured" />

            <x-widget.img-banners truyenthongGroup="home-banners-1" />

            <x-widget.featured-widget widgetTitle="Bộ sưu tập" :postFeatured="$postFeatured" />

        </div>

    </div>

</section>
