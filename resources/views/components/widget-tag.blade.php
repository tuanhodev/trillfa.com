@props(['tags'])

@if($tags)

<section {{ $attributes->merge([ 'class' => 'widget-tag'])}}>

    <div class="widget-center">
        <h3 class="widget-tag-title widget-title relative">Thẻ tag nội bật</h3>
    </div>

    <div class="widget-tag-body">
        @foreach($tags as $key => $tag)
            <div class="tag-container">
                <a href="{{ route('blog.tag.posts', $tag) }}">{{ $tag->name }}</a>
            </div>
        @endforeach
    </div>

</section>

@endif
