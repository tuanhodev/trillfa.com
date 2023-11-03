@props([ 'postFeatured', 'widgetTitle' ])

@if($postFeatured)
<section class="widget-home-container">

    <div class="widget-home">

        <h2 class="widget-title"> {{ $widgetTitle ?? 'Widget title' }} </h2>

        <div class="widget-home-body">

            @foreach($postFeatured as $key => $post)

            <div class="card card-base">

                <a class="card-cover"> <img src="{{ asset($post->cover->url()) }}" alt=""> </a>

                <a>
                    <h3 class="widget-item-title"> {{ $post->title }} </h3>
                </a>

                <div class="widget-item-content"> {!! $post->builderWord() !!} </div>

                <footer class="widget-footer">

                    <div class="user">
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
