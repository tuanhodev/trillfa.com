
{{-- component: partials.welcome-header --}}

@props(['welcomeFeatured'])

<div class="content-header-container">

    <div class="content-header">

        @isset($welcomeFeatured)
        @foreach($welcomeFeatured as $item)

        <div class="card-base content-header-item">

            <div class="cover"><img src="{{ asset($item->cover->url()) }}" alt=""></div>

            <h2 class="text-gradient-1">{{ $item->title }}</h2>

            <div class="desc">
                <p>{!! $item->description !!}</p>
            </div>

            <div class="widget-action">
                <a href="{{ url( $item->route )}}">{{ __('Xem thêm >>') }}</a>
            </div>

        </div>

        @endforeach
        @endisset
    </div>

</div>
