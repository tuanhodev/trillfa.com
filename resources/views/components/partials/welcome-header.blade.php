@props(['featured'])

<div class="content-header-container">

    <div class="content-header">

        @if($featured)
        @foreach($featured as $item)

        <a href="{{ route($item->route) }}" class="card-base content-header-item">

            <div class="cover"> <img src="{{ asset($item->image) }}" alt=""> </div>

            <h3 class="text-gradient-1">{{ $item->title }}</h3>

            <div class="desc"> <p> {!! $item->description !!} </p> </div>

        </a>

        @endforeach
        @endif
    </div>

</div>
