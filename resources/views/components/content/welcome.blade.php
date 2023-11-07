<section class="content">

    <div class="content-container">

        <!-- Welcome header -->
        <div class="container mx-auto">
            <x-partials.welcome-header :featured="$featured" />
        </div>

        <div class="content-body">

            <x-widget-tag tagTitle="Tag nổi bật" class="container mx-auto" />

            <div class="container mx-auto">
                <x-widget.featured-widget widgetTitle="Bài đăng mới" :postFeatured="$postFeatured" class="widget-margin-top" />
            </div>

            <div class="container mx-auto">
                <x-widget.img-banners truyenthongGroup="home-banners-1" />
            </div>

            <div class="container mx-auto">
                <x-widget.featured-widget widgetTitle="Bộ sưu tập" :postFeatured="$postFeatured" />
            </div>


        </div>

    </div>

</section>
