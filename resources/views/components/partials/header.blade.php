@props([ 'homeSlider' ])

@if($homeSlider)
<section class="home-hero-container">

    <div class="home-hero">

        <div class="hero-header-container">
            <div class="box">
                <a class="hero-header" href="{{ route($homeSlider->route) }}">
                    <h1 class="hero-title">{{ $homeSlider->title }}</h1>
                </a>
                <p class="hero-desc">
                    {!! $homeSlider->builderWord() !!}
                </p>
            </div>
        </div>

        <a class="hero-img" href="{{ route($homeSlider->route) }}">
            <img src="{{ asset($homeSlider->image) }}" alt="">
        </a>

    </div>

</section>
@endif
