
{{-- component: content.welcome --}}

<section class="content">

    <div class="content-container">
        <!-- Welcome header -->
        <div class="container mx-auto">
            <x-partials.welcome-header :welcomeFeatured="$welcomeFeatured" />
        </div>
        {{-- body content --}}
        <div class="content-body">
            {{-- wedget bai dang moi --}}
            <x-widget-tag tagTitle="Tag nổi bật" class="container mx-auto" />
            <div class="container mx-auto">
                <x-widget.featured-widget widgetTitle="Bài đăng mới" featured="{{__('false')}}" class="widget-margin-top" />
                <!-- {{-- Nut xem them --}} -->
                <div class="view-more">
                    <a href="{{ route('blog.index') }}">
                        <p>Xem nhiều hơn</p>
                        <x-orchid-icon path="arrow-right" />
                    </a>
                </div>
            </div>
            {{-- Banners blog co nhung gi --}}
            <div class="container mx-auto">
                <x-widget.img-banners truyenthongGroup="home-banners-1" />
            </div>
            {{-- widget co the ban quan tam --}}
            <div class="container mx-auto">
                <x-widget.featured-widget widgetTitle="Có thể bạn thích" featured="{{ _('true') }}" />
                <div class="view-more">
                    <a href="{{ route('blog.index') }}">
                        <p>Xem nhiều hơn</p>
                        <x-orchid-icon path="arrow-right" />
                    </a>
                </div>
            </div>
        </div>
        {{-- end body content --}}
    </div>

</section>
