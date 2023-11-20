@props(['featured'])

<div class="content-header-container">

    <div class="content-header">

        @if($featured)
        @foreach($featured as $item)

        <div class="card-base content-header-item">

            <div class="cover"> <img src="{{ asset($item->cover->url()) }}" alt=""> </div>

            <h3 class="text-gradient-1">{{ $item->title }}</h3>

            <div class="desc"> <p> {!! $item->description !!} </p> </div>

        </div>

        @endforeach
        @endif
    </div>

</div>
