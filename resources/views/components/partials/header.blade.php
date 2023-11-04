@props([ 'homeSlider' ])

@if($homeSlider)
<section class="home-hero-container">

    <div class="container home-hero mx-auto">

        <div class="hero-header-container">
            <a class="hero-header" href="{{ route($homeSlider->route) }}">
                <h1 class="hero-title">{{ $homeSlider->title }}</h1>
            </a>
            <p class="hero-desc">
                {!! $homeSlider->builderWord() !!}
            </p>
        </div>

        <a class="hero-img" href="{{ route($homeSlider->route) }}">
            <img src="{{ asset($homeSlider->image) }}" alt="">
        </a>

    </div>

</section>
@endif
