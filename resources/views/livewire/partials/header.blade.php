<section class="home-hero relative">

    <div class="container mx-auto home-hero-container">

        <h1 class="title-hero home-hero-title text-center">{{ $homeSlider->title }}</h1>
        <p class="mt-3 home-hero-description text-center">
            {!! $homeSlider->description !!}
        </p>
        <div class="home-hero-footer">
            <a href="{{ route($homeSlider->route) }}">
                <button class="btn btn-primary-dark text-white">Đọc thêm</button>
            </a>
        </div>

    </div>

</section>


