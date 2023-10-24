<section class="content">

    <div class="content-container">

        <div class="content-header">
            <div class="content-header-container mx-auto">
                @if($featured)
                    @foreach($featured as $item)
                        <div class="section bg-primary-dark text-white">

                            <div class="cover mx-auto bg-secondary">
                                <img src="{{ asset($item->image) }}" alt="">
                            </div>

                            <h3>{{ $item->title }}</h3>

                            <div class="section-content">
                                <p> {!! $item->description !!} </p>
                            </div>

                            <a href="{{ route($item->route) }}">
                                <div class="btn btn-middle">Xem ngay</div>
                            </a>

                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="content-body">
            <div class="content-body-container">
                <div class="">
                    <div class="">
                    </div>
                </div>
            </div>

        </div>

</section>
