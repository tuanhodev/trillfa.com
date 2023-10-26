<section class="content">

    <div class="content-container">

        <!-- Welcome header -->
        <x-partials.welcome-header :featured="$featured" />

        <div class="content-body">

            <div class="content-body-container">

                <x-widget.featured-widget widgetTitle="Bài đăng mới" :postFeatured="$postFeatured" />

            </div>

        </div>

</section>
