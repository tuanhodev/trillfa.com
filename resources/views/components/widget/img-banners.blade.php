@props(['banners', 'truyenthongGroup'])

@if($banners)
<div class="img-banners-container">

    <div class="img-banners">

        <div class="img-banners-cover">
            <img class="img" src="{{ asset($banners->cover->url()) }}" alt="">
        </div>

        <div class="banners-content">
            <h3 class="banners-title"><x-orchid-icon path="bs.award-fill" class="icon-title" />{{ $banners->title }}</h3>
            <p>{!! $banners->description !!}</p>
        </div>

    </div>

</div>
@endif
