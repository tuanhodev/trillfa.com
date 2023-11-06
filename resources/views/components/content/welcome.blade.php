<section class="content">

    <div class="content-container">

        <!-- Welcome header -->
        <x-partials.welcome-header :featured="$featured" />

        <div class="content-body">

            <x-widget-tag tagTitle="Tag nổi bật" />

            <x-widget.featured-widget widgetTitle="Bài đăng mới" :postFeatured="$postFeatured" class="widget-margin-top" />

            <x-widget.img-banners truyenthongGroup="home-banners-1" />

            <x-widget.featured-widget widgetTitle="Bộ sưu tập" :postFeatured="$postFeatured" />


        </div>

    </div>

</section>
