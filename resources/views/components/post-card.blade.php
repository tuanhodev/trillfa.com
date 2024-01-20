
@props(['postDes' => 'hidden', 'post'])

@isset($post)
<div class="card-base home-card">

    <a href="{{ route('blog.post.view', $post) }}" class="home-card-cover"> <img src="{{ asset($post->cover->url()) }}"
            alt=""> </a>

    <a href="{{ route('blog.post.view', $post) }}" class="home-card-title">
        <h3 class="widget-item-title">{{ $post->builderTitle(16) }}</h3>
    </a>

    @if ($postDes == 'show')
    <div class="home-card-desc">
        <p> {!! $post->builderWord() !!} </p>
    </div>
    @endif

    <footer class="home-card-footer">

        <div class="home-card-footer-user">
            <x-orchid-icon path="bs.person-circle" />
            {{ $post->user->name ?? '' }}
        </div>

        <p class="published-at"> {{ $post->publishedAt() ?? '' }} </p>

    </footer>

</div>
@endisset
