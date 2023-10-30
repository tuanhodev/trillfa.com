<section class="content">

    <div class="content-container">

        <!-- Welcome header -->
        <x-partials.welcome-header :featured="$featured" />

        <div class="content-body">

            <div class="widget-featured content-body-container">
                <x-widget.featured-widget widgetTitle="Bài đăng mới" :postFeatured="$postFeatured" />
            </div>

            <div class="widget-home-banners">
                <x-widget.img-banners truyenthongGroup="home-banners-1" />
            </div>

            <div class="widget-collection content-body-container">
                <x-widget.featured-widget widgetTitle="Bộ sưu tập" :postFeatured="$postFeatured" />
            </div>

        </div>

</section>
