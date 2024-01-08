
{{-- component: widget.featured-widget --}}

@props([ 'currentPost', 'posts', 'widgetTitle', 'featured', 'postsLimit' ])

@if($posts)
<section {{ $attributes->merge([ 'class' => "widget-home-container" ]) }}>

    <div class="widget-home">

        @isset($widgetTitle)
            <h2 class="widget-title-1"> {{ $widgetTitle ?? 'Widget title' }} </h2>
        @endisset

        <div class="widget-home-body">

            @foreach($posts as $post)

            @if ($post->id != $currentPost)

            <x-post-card class="post-card" :post="$post" />

            @endif

            @endforeach

        </div>

    </div>

</section>
@endif
