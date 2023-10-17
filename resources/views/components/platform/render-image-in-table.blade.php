@isset($post)
<figure class="figure">

    <img class="figure-img img-fluid rounded" src="{{ asset( $post->cover->url() )}}" alt="{{ $post->title }}">

    <figcaption class="figure-caption text-center">{{ $post->id }}</figcaption>

</figure>
@endisset
