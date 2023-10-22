<section class="home-hero">
    <div class="container mx-auto home-hero-container">
        <h1 class="home-hero-title">
            {{ $homeSlider->title }}
        </h1>
        <p class="mt-3 home-hero-description">
            {!! $homeSlider->description !!}
        </p>
        <div class="home-hero-footer">
            <a href="{{ route($homeSlider->route) }}">
                <button class="btn btn-secondary">Xem ngay</button>
            </a>
            <!-- {{-- <button class="btn-base">Button</button> --}} -->
        </div>
    </div>
</section>


