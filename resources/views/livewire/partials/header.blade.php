<section id="trang-chinh-header"
    class="relative bg-gradient-to-b from-primary-dark to-primary-light">
    <div class="backdrop-blur-sm flex items-center
        justify-center min-h-[320px] tablet:min-h-[700px] shadow-lg px-4 pt-24 pb-12">
        <div
            class="max-w-2xl mx-auto flex flex-col items-center text-center p-4">
            <h1 class="text-app-title text-primary-content leading-[2.8rem] tablet:leading-[4.5rem]">
                {{ $homeSlider->title }}
            </h1>
            <p class="mt-3 text-primary-content">
                {!! $homeSlider->description !!}
            </p>
            <div class="flex justify-center mt-6">
                <a href="{{ route($homeSlider->route) }}">
                    <button class="btn-secondary">Xem ngay</button>
                </a>
                <!-- {{-- <button class="btn-base">Button</button> --}} -->
            </div>
        </div>
    </div>
</section>


