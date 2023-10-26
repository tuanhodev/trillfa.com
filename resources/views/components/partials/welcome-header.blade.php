@props(['featured'])

<div class="content-header">

    <div class="content-header-container mx-auto">
        @if($featured)
        @foreach($featured as $item)
        <div class="section card-base bg-primary-dark">

            <div class="cover mx-auto">
                <img src="{{ asset($item->image) }}" alt="">
            </div>

            <h3>{{ $item->title }}</h3>

            <div class="section-content">
                <p> {!! $item->description !!} </p>
            </div>

            <a href="{{ route($item->route) }}">
                <span class="btn btn-middle">Xem ngay</span>
            </a>

        </div>
        @endforeach
        @endif
    </div>

</div>
