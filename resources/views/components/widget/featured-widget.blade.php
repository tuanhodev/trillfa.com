@props([ 'postFeatured', 'widgetTitle' ])

@if($postFeatured)
<section {{ $attributes->merge([ 'class' => "widget-home-container" ]) }}>

    <div class="widget-home">

        <h2 class="widget-title-1"> {{ $widgetTitle ?? 'Widget title' }} </h2>

        <div class="widget-home-body">

            @foreach($postFeatured as $key => $post)

            <div class="card-base home-card">

                <a href="{{ route('post.view', $post) }}" class="home-card-cover"> <img src="{{ asset($post->cover->url()) }}" alt=""> </a>

                <a href="{{ route('post.view', $post) }}" class="home-card-title">
                    <h3 class="widget-item-title"> {{ $post->title }} </h3>
                </a>

                <div class="home-card-desc">
                    <p> {!! $post->builderWord() !!} </p>
                </div>

                <footer class="home-card-footer">

                    <div class="home-card-footer-user">
                        <x-orchid-icon path="bs.person-circle" />
                        {{ $post->user->name ?? '' }}
                    </div>

                    <p class="published-at"> {{ $post->publishedAt() ?? '' }} </p>

                </footer>

            </div>

            @endforeach

        </div>

    </div>

</section>
@endif
