@props([ 'homeSlider' ])

@if($homeSlider)
<section class="home-hero-container">

    <div class="home-hero">

        <div class="hero-header-container">
            <div class="card-base box">
                <a class="hero-header" href="{{ url($homeSlider->route) }}">
                    <h1 class="hero-title">{{ $homeSlider->title }}</h1>
                </a>
                <p class="hero-desc">
                    {!! $homeSlider->builderWord(40) !!}
                </p>
            </div>
        </div>

        <a class="hero-img" href="{{ url($homeSlider->route) }}">
            <img src="{{ asset($homeSlider->cover->url()) }}" alt="">
        </a>

    </div>

</section>
@endif
