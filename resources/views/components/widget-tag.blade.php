@props([ 'tags', 'tagTitle' ])

@if($tags)

<section {{ $attributes->merge([ 'class' => 'widget-tag-container']) }}>

    <div class="widget-tag">

        <div class="tag-title-container">
            <h3 class="title widget-title-1"> {{ $tagTitle ?? 'Thẻ tag nội bật' }} </h3>
        </div>

        <div class="tag-body-container">
            @foreach($tags as $key => $tag)
                <div class="tag-body">
                    <div class="tag-icon"> <x-orchid-icon path="bs.tag" width="24px" /> </div>
                    <a href="{{ route('blog.tag.posts', $tag) }}">{{ $tag->name }}</a>
                </div>
            @endforeach
        </div>

    </div>

</section>

@endif
