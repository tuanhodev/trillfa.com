@props(['banners', 'truyenthongGroup'])

@if($banners)
<div class="img-banners">

    <div class="img-banners-container">

        <img src="{{ asset($banners->image) }}" alt="">

        <div class="banners-content">
            <h3 class="banners-title">{{ $banners->title }}</h3>
            <p>{!! $banners->description !!}</p>
        </div>

    </div>

</div>
@endif
